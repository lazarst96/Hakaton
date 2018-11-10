<?php
class Patient_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function add_report($therapy_id, $desc, $images_src){
		$data = array(
			"therapy_id" => $therapy_id,
			"decription" => $desc
		);
		$this->db->insert("report",$data);
		$insert_id = $this->db->insert_id();
		$data = array();
		foreach($images_src as $src){
			array_push($data, array("source"=>$src, "report_id"=>$insert_id));
		}
		$this->db->insert_batch("image", $data);
		$this->db->select("therapy.period");
		$this->db->from("therapy");
		$this->db->where("id",$therapy_id);

		$query = $this->db->get();
		$row = $query->row();
		$period = $row->period;

		$date = date("Y-m-d H:i:s");
		$date = new DateTime($date);
		$date->modify(" + $period days");

		$data = array(
			"therapy_id" => $insert_id,
			"time" => $date->format('Y-m-d H:i:s'),
		);
		$this->db->insert("reminder", $data);
	}
	public function visit_reminder($id){
		$data = array(
			"visited"=>date("Y-m-d H:i:s")
		);
		$this->db->where("id", $id);
		$this->db->update("reminder", $data);
	}
	public function all_archive($patient_id){
		$this->db->select("therapy.*, user.name as doctor_name");
		$this->db->from("therapy");
		$this->db->join("doctor","doctor.user_id=therapy.doctor_id","left");
		$this->db->join("user", "user.id=doctor.user_id", "left");
		$this->db->where("therapy.patient_id",$patient_id);
		$this->db->where("therapy.close_time IS NOT NULL");

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->result();
		}
		return array();
	}
}
