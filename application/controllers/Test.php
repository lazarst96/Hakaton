<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("User_model","user");
		$this->load->model("Mail_model","mail");
		$this->load->model("Patient_model", "patient");
		$this->load->helper("string");
	}
	public function index()
	{
		echo $this->mail->send_warning_message("lazar.stamenkovic@pmf.edu.rs","Vase stanje se pogorsalo","Laza Lazic", "Akne na licu");

	}
}