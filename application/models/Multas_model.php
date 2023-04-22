<?php

class Multas_model extends CI_model {

    public function searchMultas($bloque, $apartamento) {
        $this->db->select("*");
        $this->db->from("multas");
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

}

?>