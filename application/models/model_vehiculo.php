<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class model_vehiculo extends CI_model
{
    public function construccion()
    {
    $this->load->database();
    }

    public function m_insert_vehiculo($patente_insert,$marca_insert,$modelo_insert,$color_insert)
    {
    $this->db->query("INSERT INTO vehiculos (patente,marca,modelo,color) VALUES ('$patente_insert','$marca_insert','$modelo_insert','$color_insert')");
    }

    public function obtener_vehiculos()
    {
        $query_select = $this->db->query("SELECT * FROM vehiculo");
        return $query_select;
    }





}
