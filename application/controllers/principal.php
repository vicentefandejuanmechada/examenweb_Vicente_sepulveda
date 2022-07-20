<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class principal extends CI_Controller{
	
	public function index(){

    $this->load->view('principal');
	}

public function formucontacto()
	{
		$this->load->view('contacto');
	}


	public function vistainsert (){

		$this->load->view('agregar_vehiculo');
	}

	public  function agrega_vehiculo()
	{
	
		$patente_insert= $this->input->get('campoPatente');
		$marca_insert= $this->input->get('campoMarca');
		$modelo_insert= $this->input->get('campoModelo');
		$color_insert= $this->input->get('campoColor');

		$this->load->model('model_vehiculo');
		$this->model_vehiculo->m_insert_vehiculo($patente_insert,$marca_insert,$modelo_insert,$color_insert);
		
		$this->db->close();
		redirect('principal/ver_todos_losautos');
		
	

	}

	
public function verVehiculos()
{
	$this->load->model('model_vehiculo');

	$datos_vehiculos = $this->model_vehiculo->select_vehiculos();

	$datos['query'] = $datos_vehiculos;

    $this->load->view('ver_todos_losautos', $datos);
	
	$this->db->close();
}
	
}




