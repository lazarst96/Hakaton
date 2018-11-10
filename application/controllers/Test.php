<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("User_model","user");
		$this->load->model("Patient_model", "patient");
	}
	public function index()
	{
		$period =1;
		$date = date("Y-m-d H:i:s");
		$date = new DateTime($date);
		$date->modify(" + $period days");
		echo $date->format('Y-m-d H:i:s');

	}
}