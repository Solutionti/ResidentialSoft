<?php 

class Apartamentos_model extends CI_Model {

    public function insertApartament($data) {
        $datos = [
            "apartamento" =>  $data["apartament"],
            "bloque" => $data["bloque"],
            "id_conjunto" => $this->session->userdata("id"), 
            "id_padre" => $this->session->userdata("codigo")
        ];
        $this->db->insert("apartamentos", $datos);
    }

    public function getApartament() {
        $this->db->select("*");
        $this->db->from("apartamentos");
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $result = $this->db->get();

        return $result;
    }

 }