<?php
class Mail_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->library('email');
		$this->load->library('EmailSend');
	}
	public function send_welcome_message($to,$password){
		$this->email->from($this->emailsend->From());
		$this->email->to($to);

		$this->email->subject($this->emailsend->Subject());

		$data['password'] = $password;
		$data['email'] = $to;
		$message = $this->load->view("email/email_message1",$data,true);
		$this->email->message($message);

		if($this->email->send()){
			return TRUE;
		}
		return $this->email->print_debugger();
	}
	public function send_warning_message($to,$message,$doctor, $diag){
		$this->email->from($this->emailsend->From());
		$this->email->to($to);

		$this->email->subject($this->emailsend->Subject());
		$data['message'] = $message;
		$data['doctor'] = $doctor;
		$data['diag'] = $diag;
		$message = $this->load->view("email/email_message2",$data,true);
		$this->email->message($message);

		if($this->email->send()){
			return TRUE;
		}
		return $this->email->print_debugger();
	}
}