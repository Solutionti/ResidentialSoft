<?php 

class Generic_model extends CI_model {

    public function getDocumentos() {
        $this->db->select("*");
        $this->db->from("tp_documentos");
        $result = $this->db->get();

        return $result;

    }

}

?>