<?php
class Doctor_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function add_therapy($doctor_id, $patient_id, $name, $desc, $period){
		$data = array(
			"patient_id" => $patient_id,
			"doctor_id" => $doctor_id,
			"name" => $name,
			"description" => $desc,
			"period" => $period
		);
		$this->db->insert("therapy", $data);
		$insert_id=$this->db->insert_id();

		$date = date("Y-m-d H:i:s");
		$date = new DateTime($date);
		$date->modify(" + $period days");

		$data = array(
			"therapy_id" => $insert_id,
			"time" => $date->format('Y-m-d H:i:s'),
		);
		$this->db->insert("reminder", $data);
	}
	public function all(){
		$this->db->select("user.*");
		$this->db->from("doctor");
		$this->db->join("user","user.id=doctor.user_id","left");
		$this->db->limit(8);

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->result();
		}
		return array();

	}
	public function change_period($therapy_id, $period){
		$data = array(
			"period" => $period,
		);
		$this->db->where("therapy_id", $therapy_id);
		$this->db->update("therapy", $data);
	}
	public function finish_therapy($therapy_id){
		$data = array(
			"close_time" => date("Y-m-d H:i:s")
		);
		$this->db->where("id", $therapy_id);
		$this->db->update("therapy", $data);
	}
	public function patients($id){
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("type",0);
		$query = $this->db->get();
		return $query->result();
	}
	public function for_mail($therapy_id){
		$this->db->select("therapy.*,user.email");
		$this->db->from("therapy");
		$this->db->join("user","user.id=therapy.patient_id","left");
		$this->db->where("therapy.id",$therapy_id);

		return $this->db->get()->row();
	}

}
