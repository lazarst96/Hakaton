<?php
class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function login($email,$password){
		$this->db->select("user.*");
		$this->db->from("user");
		$this->db->where("email",$email);
		$this->db->where("password", $password);
		$query = $this->db->get();
		if($query->num_rows()){
			$row = $query->row();
			return $row;
		}
		return false;
	}
	public function register($email, $name, $password, $citizen_id){
		$data = array(
			"email" => $email,
			"name" => $name,
			"password" => $password,
			"citizen_id" => $citizen_id,
			"type" => 1
		);
		$this->db->insert("user", $data);
		if($this->db->affected_rows() > 0)
			return TRUE;
		return FALSE;
	}
	public function exist($citizen_id){
		$this->db->select("user.*");
		$this->db->from("user");
		$this->db->where("citizen_id",$citizen_id);
		$this->db->where("type", 0);

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->row();
		}
		return false;
	}
	public function exists($id){
		$this->db->select("user.*");
		$this->db->from("user");
		$this->db->where("id",$id);
		$this->db->where("type", 0);

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->row();
		}
		return false;
	}
}