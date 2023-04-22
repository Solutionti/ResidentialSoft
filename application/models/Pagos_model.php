<?php 

class Pagos_model extends CI_model {

    public function searchPayments($bloque,$apartamento,$month,$year) {
        
        $this->db->select("*");
        $this->db->from("pagos");
        $this->db->where("fecha <=", $month);
        $this->db->where("year", $year);
        $this->db->where("bloque", $bloque);
        $this->db->where("apartamento", $apartamento);
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $result = $this->db->get();
        $consult = [];
        foreach($result->result() as $value) {
            $consult[] = $value;
        }
        return  $consult;
    }

    public function savePagos($data) {
        
        $datos  = [
            "year" => $data["years"],
            "mes" => $data["mes"],
            "fecha" => $data["date"],
            "valor" => $data["value"],
            "codigo_pagos" => 1,
            "descripcion " => $data["description"],
            "bloque" => $data["bloque"],
            "apartamento" => $data["apartament"],
            "id_conjunto" => $this->session->userdata("id"),
            "id_padre" => $this->session->userdata("codigo")
        ];
        $this->db->insert("pagos", $datos);

        
       
        
    }
}

?>