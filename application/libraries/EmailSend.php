<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emailsend{
	private $from;
	private $subject;

	public function __construct(){
		$this->from="lazarstamenkovic96@hotmail.com";
		$this->subject="DermaReport";
	}

	public function From(){
		return $this->from;
	}
	public function Subject(){
		return $this->subject;
	}

}