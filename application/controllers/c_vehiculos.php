<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class vehiculo extends CI_Controller{


public  function agrega_vehiculo()
{
    $this->load->view('agregar_vehiculo', $data);
	
}


public function verVehiculos()
{
    $this->load->view('ver_todos_losautos', $data);
	
}

}

