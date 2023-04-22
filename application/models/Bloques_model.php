<?php 

class Bloques_model extends CI_Model {

    public function getBloques() {
        $this->db->select("*");
        $this->db->from("bloques");
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $result = $this->db->get();

        return $result;
    }

 }