<?php 

class Visitantes_model extends CI_Model {

    public function searchVisitante($document) {
        $this->db->select("*");
        $this->db->from("visitantes");
        $this->db->where("documento", $document);
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $result = $this->db->get();

        if($result->num_rows() > 0){
            return $result->row();
        }
        else {
            return 0;
        }
    }

    public function insertVisitantes($data) {

        $datos = [
            "documento" => $data["document"],
            "nombre" => $data["name"],
            "apellido" => $data["lastname"],
            "bloque" => $data["bloque"],
            "apartamento" => $data["apartament"],
            "descripcion" => $data["description"],
            "id_conjunto" => $this->session->userdata("id"),
            "id_padre" => $this->session->userdata("codigo")
        ];
        $this->db->insert("visitantes", $datos);
    }

}