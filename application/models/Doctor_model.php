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
	public function change_period($therapy_id, $period){
		$data = array(
			"period" => $period,
		);
		$this->db->where("therapy_id", $therapy_id);
		$this->db->update("therapy", $data);
	}
	public function finish_therapy($therapy_id){
		
	}

}
