<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index()
	{
		$data["title"] = $this->session->user_data["name"];
		$data["styles"] = array(
			base_url("assets/css/patient.css"),
			base_url("assets/library/bootstrap/css/bootstrap.min.css")
		);
		$data["scripts"] = array(
			base_url("assets/library/jquery/jquery.min.js"),
			base_url("assets/library/bootstrap/js/bootstrap.min.js")
		);
		$this->load->view("templates/header",$data);
		$this->load->view("doctor");
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
	public function therapy($id=""){
		$data["title"] = $this->session->user_data["name"];
		$data["styles"] = array(
			base_url("assets/css/patient.css"),
			base_url("assets/library/bootstrap/css/bootstrap.min.css")
		);
		$data["scripts"] = array(
			base_url("assets/library/jquery/jquery.min.js"),
			base_url("assets/library/bootstrap/js/bootstrap.min.js")
		);
		$this->load->view("templates/header",$data);
		$this->load->view("doctor_therapy");
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
	}
}