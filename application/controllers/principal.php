<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class principal extends CI_Controller{
	
	public function index(){

    $this->load->view('principal');
	}

public function formucontacto()
	{
		$this->load->view('formucontacto');
	}


}




