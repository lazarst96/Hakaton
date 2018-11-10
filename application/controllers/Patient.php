<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}
	public function index()
	{
		$data["title"] = "Pacient";
		$data["styles"] = array(
			"https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css",
			"https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css",
			"https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css",
			"https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css",
			"https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css",
			"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css",
			"assets/css/cs-skin-elastic.css",
			"assets/css/patient-style.css",
			"https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css",
			"https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css",
			"https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css",
			"https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css"
		);
		$this->load->view("templates/header",$data);
		$this->load->view("patient");
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
}