<?php

class Gastos_model extends CI_model {

    public function saveGastos($data) {
        
        $datos = [
           "documento" => $data["document"], 
           "nombre" =>  $data["name"],
           "fecha" =>  $data["date"],
           "nitprov" =>  $data["nitprov"],
           "nombreprov" =>  $data["nameprov"],
           "valor" =>  $data["value"],
           "observacion" =>  $data["concepto"],
           "novedad" =>  $data["novedad"],
           "id_conjunto" => $this->session->userdata("id"),
           "id_padre" => $this->session->userdata("codigo")
        ];
        $this->db->insert("gastos", $datos);
    }
}

?>