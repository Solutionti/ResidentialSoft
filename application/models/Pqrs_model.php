<?php 

class Pqrs_model extends CI_model {

    public function searchPqrs($radicado) {
        $this->db->select("*");
        $this->db->from("pqrs");
        $this->db->where("codigo_pqrs", $radicado);
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $result = $this->db->get();

        if($result->num_rows() > 0){
            return $result->row();
        }
        else {
            return 0;
        }
    }

    public function responderPqrs() {
        $datos = [
            "resfecha" => $data["date"],
            "resestado" => $data["estado"],
            "resmensaje" => $data["mensaje"],
        ];
        $this->db->where("codigo_pqrs", $data["radicado"]);
        $this->db->update("pqrs", $datos);
    }   
}

?>