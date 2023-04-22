<?php

class Reportes_model extends CI_model {
    
    public function countGastos () {
        $sql = "SELECT SUM(valor) as gastos FROM gastos where id_conjunto = ".$this->session->userdata('id');
        $result = $this->db->query($sql);

        return $result;
        
    }

    public function countVisitants() {
        $sql = "SELECT COUNT(*) AS visitantes FROM visitantes where id_conjunto = ".$this->session->userdata('id');
        $result = $this->db->query($sql);

        return $result;
    }

    public function countRecaudos() {
        $sql = "SELECT SUM(valor) as pagos FROM pagos where id_conjunto = ".$this->session->userdata('id') ;
        $result = $this->db->query($sql);

        return $result;
    }
}

?>