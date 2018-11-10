<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index()
	{
		$data["title"] = "Početna";
		$data["styles"] = array(
			//base_url("assets/css/style.css"),
		);
		$this->load->view("templates/header",$data);
		$this->load->view("home");
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
}