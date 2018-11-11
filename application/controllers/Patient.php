<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper("string");
		$this->load->model("Patient_model","patient");
		$this->load->helper("user_helper");

	}
	public function index($id="")
	{
		
		if($id!=""){
			$therapy_id = intval($id);
			$set_therapy = true;
		}else{
			$set_therapy= false;
			$therapy_id = -1;
		}
		if($this->form_validation->run("add_report")){
			$this->post_report($therapy_id);
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
		$data["therapy"] = $this->patient->therapy($therapy_id);
		$data["history"] = $this->patient->history($therapy_id);
		$data["archive"]=$this->patient->all_archive($this->session->user_data["id"]);
		$data["active"] = $this->patient->all_active($this->session->user_data["id"]);
		$data["set_therapy"] =$set_therapy;
		$data["images"] = array();
		foreach($data["history"] as $it){
			array_push($data["images"],$this->patient->images_for_report($it->id));
		}

		


		$this->load->view("patient",$data);
		$data["scripts"] = array(
			//base_url("assets/js/script.js"),
		);
		$this->load->view("templates/footer",$data);
		
	}
	private function upload_images($report_id){
		mkdir("./assets/images/report/".$report_id."/");
		$id = $this->session->user_data["id"];
		$ImageCount = count($_FILES['images']['name']);
		$this->load->library('upload');
		for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['images']['name'][$i];
            $_FILES['file']['type']       = $_FILES['images']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['images']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['images']['error'][$i];
            $_FILES['file']['size']       = $_FILES['images']['size'][$i];

            // File upload configuration
            $name = random_string('alnum', 32);
            $uploadPath = "./assets/images/reports/tmp/";
            $config['upload_path']          = "./assets/images/report/".$report_id."/";
            $config['allowed_types']        = 'jpg';
	        $config['file_name']			= $name;
	        $config['max_size']             = 2048;
	        $config['max_width']            = 2048;
	        $config['max_height']           = 2048;

            // Load and initialize upload library
            //$this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                /*$imageData = $this->upload->data();
                 $uploadImgData[$i]['image_name'] = $imageData['file_name'];*/

            }else{
            	echo $this->upload->display_errors();
            }
        }
	}
		
	private function post_report($therapy_id){
		$desc = $this->input->post("desc");
		
		$id_report = $this->patient->add_report($therapy_id, $desc);
		$this->upload_images($id_report);
	}
}