<?php
class Patient_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function add_report($therapy_id, $desc){
		$data = array(
			"therapy_id" => $therapy_id,
			"description" => $desc
		);
		$this->db->insert("report",$data);
		$insert_id = $this->db->insert_id();
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
		$this->db->where("therapy_id",$therapy_id);
		$this->db->delete("reminder");

		$this->db->insert("reminder", $data);
		return $insert_id;
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
	public function all_active($patient_id){
		$this->db->select("therapy.*, user.name as doctor_name, reminder.time as deadline");
		$this->db->from("therapy");
		$this->db->join("doctor","doctor.user_id=therapy.doctor_id","left");
		$this->db->join("user", "user.id=doctor.user_id", "left");
		$this->db->join("reminder","reminder.therapy_id = therapy.id","left");
		$this->db->where("therapy.patient_id",$patient_id);
		$this->db->where("therapy.close_time IS NULL");

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->result();
		}
		return array();
	}
	public function therapy($therapy_id){
		$this->db->select("therapy.*, user.name as doctor, reminder.time as deadline, user1.name as patient");
		$this->db->from("therapy");
		$this->db->join("doctor","doctor.user_id=therapy.doctor_id","left");
		$this->db->join("user","user.id=doctor.user_id","left");
		$this->db->join("reminder","reminder.therapy_id=therapy.id","left");
		$this->db->join("user as user1","user1.id=therapy.patient_id");
		$this->db->where("therapy.id",$therapy_id);

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->row();
		}
		return false;
	}
	public function history($therapy_id){
		$this->db->select("report.*");
		$this->db->from("report");
		$this->db->where("report.therapy_id",$therapy_id);

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->result();
		}
		return array();
	}
	public function images_for_report($id){
		if(file_exists("assets/images/report/".$id))
			return directory_map("assets/images/report/".$id,1,false);
		return array();
	}
	public function set_dir($id){
		rename("assets/images/report/tmp", "assets/images/report/".$id);
	}

}
