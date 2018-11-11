<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("User_model","user");
		$this->load->model("Doctor_model","doctor");
		$this->error =false;
	}
	public function index()
	{
		if($this->session->userdata("user_data")){
			if($this->session->user_data['type']==1){
				redirect(base_url("doctor/patient"));
			}else{
				redirect(base_url("patient"));
			}
		}
		if($this->form_validation->run('login')){
			if($this->session->user_data['type']==1){
				redirect(base_url("doctor/patient"));
			}else{
				redirect(base_url("patient"));
			}
		}
		$data["title"] = "Početna";
		$data["styles"] = array(
			"assets/css/home-page.css",
			"assets/library/bootstrap/css/bootstrap.min.css"
		);
		$data["scripts"] = array(
			"assets/library/jquery/jquery.min.js",
			"assets/library/bootstrap/js/bootstrap.min.js",
		);
		$this->load->view("templates/header",$data);
		$data['error'] = $this->error;
		$data['doctors'] = $this->doctor->all();
		$this->load->view("home",$data);
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
	public function log_user($password){
		$email = $this->input->post('email');
		$row = $this->user->login($email,$password);
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
			$this->error = true;
			return false;
		}
	}
}