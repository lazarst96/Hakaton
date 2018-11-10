<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("User_model","user");
	}
	public function index()
	{
		if($this->session->userdata("user_data")){
			if($this->session->user_data['type']==0){
				redirect(base_url("doctor"));
			}else{
				redirect(base_url("patient"));
			}
		}
		if($this->form_validation->run('login')){
			if($this->session->user_data['type']==0){
				redirect(base_url("doctor"));
			}else{
				redirect(base_url("patient"));
			}
			
		}
		$data["title"] = "Početna";
		$data["styles"] = array(
			//base_url("assets/css/style.css"),
		);
		$data["scripts"] = array(
			//base_url("assets/css/style.css"),
		);
		$this->load->view("templates/header",$data);
		$this->load->view("home");
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
	public function log_user($password){
		$username = $this->input->post('email');
		$row = $this->user->login($username,$password,$ip_address);
		if($row){
			$session = array(
				"id" => $row->id,
				"email" => $row->email,
				"type" => $row->type,
				"name" => $row->name
			);
			$this->session->set_userdata('user_data', $session);
			return true;
		}else{
			$this->form_validation->set_message('log_user', 'Pogrešan E-mail ili lozinka.');
			return false;
		}
	}
}