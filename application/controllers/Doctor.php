<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Patient_model","patient");
		$this->load->model("User_model","user");
		$this->load->model("Doctor_model","doctor");
		$this->load->helper("string");
		$this->load->helper("user_helper");
		$this->load->model("Mail_model","mail");
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
		if($id!=""){
			$therapy_id = intval($id);
			$set_flag = True;
			

		}else{
			$therapy_id = -1;
			$set_flag = False;

		}
		if($this->form_validation->run("change_therapy")){
			$mail = $this->doctor->for_mail();
			$finish = $this->input->post("finish");
			$call = $this->input->post("call");
			$call= (($call=="off")?false:true);
			$finish = (($call=="off")?false:true);
			echo $finish;
			if($call){
				$this->mail->send_warning_message($mail->email, "Vase stanje se pogorsalo", $this->session->user_data["name"],$mail->name);
			}
			if($finish){
				$this->doctor->finish_therapy($therapy_id);
			}
		}
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
		$data['therapy'] = $this->patient->therapy($therapy_id);
		$data["history"] = $this->patient->history($therapy_id);
		$data["images"] = array();
		foreach($data["history"] as $it){
			array_push($data["images"],$this->patient->images_for_report($it->id));
		}
		$data["set_flag"] = $set_flag;
		$this->load->view("doctor_therapy" ,$data);
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
	}
	public function add_therapy()
	{
		$flag = 2;
		if($this->form_validation->run("add_therapy")){
			$flag = $this->add_thera();
		}
		$data["title"] = $this->session->user_data["name"];
		$data["styles"] = array(
			base_url("assets/css/patient.css"),
			base_url("assets/css/dodaj-terapiju.css"),
			base_url("assets/library/bootstrap/css/bootstrap.min.css")
		);
		$data["scripts"] = array(
			base_url("assets/library/jquery/jquery.min.js"),
			base_url("assets/library/bootstrap/js/bootstrap.min.js")
		);
		$this->load->view("templates/header",$data);
		$data["flag"] = $flag;
		$this->load->view("add_therapy",$data);
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
	private function add_thera(){
		$jmbg = $this->input->post("maticni");
		$user = $this->user->exist($jmbg);
		$diag = $this->input->post("diag");
		$desc = $this->input->post("detaljno");
		$per = $this->input->post("perioda");

		$d_id = $this->session->user_data["id"];
		if($user){
			$this->doctor->add_therapy($d_id, $user->id, $diag, $desc, $per);
			return True;
		}
		return false;
		
	}
	private function add_pat(){
		$email = $this->input->post("email");
		$name = $this->input->post("ime");
		$maticni = $this->input->post("maticni");
		$password = random_string('alnum',8);
		$this->mail->send_welcome_message($email,$password);
		$this->user->register($email, $name, $password, $maticni);
	}
	public function add_patient()
	{
		$flag = 2;
		if($this->form_validation->run("add_patient")){
			$this->add_pat();
			$flag = 1;
		}else{
			$flag = 0;
		}
		$data["title"] = $this->session->user_data["name"];
		$data["styles"] = array(
			base_url("assets/css/patient.css"),
			base_url("assets/css/dodaj-terapiju.css"),
			base_url("assets/library/bootstrap/css/bootstrap.min.css")
		);
		$data["scripts"] = array(
			base_url("assets/library/jquery/jquery.min.js"),
			base_url("assets/library/bootstrap/js/bootstrap.min.js")
		);
		$this->load->view("templates/header",$data);
		$data["flag"] = $flag;
		$this->load->view("add_pacient",$data);
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
	public function patient($id="")
	{
		if($id==""){
			$ima_id = false;
			$id=-1;
			$data["pacijent"] = array();
			$data["archive"]= array();
			$data["active"] = array();
		}else{
			$ima_id = true;
			$id = intval($id);
			$data["pacijent"] = $this->user->exists(intval($id));
			$data["archive"]=$this->patient->all_archive($id);
			$data["active"] = $this->patient->all_active($id);
		}
		
		$data["title"] = $this->session->user_data["name"];
		$data["styles"] = array(
			base_url("assets/css/patient.css"),
			base_url("assets/css/dodaj-terapiju.css"),
			base_url("assets/library/bootstrap/css/bootstrap.min.css")
		);
		$data["scripts"] = array(
			base_url("assets/library/jquery/jquery.min.js"),
			base_url("assets/library/bootstrap/js/bootstrap.min.js")
		);
		$data["ima_id"] = $ima_id;
		$this->load->view("templates/header",$data);
		$data["patients"] = $this->doctor->patients($this->session->user_data["id"]);
		$this->load->view("doctor_patients",$data);
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
}