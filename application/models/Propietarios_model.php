<?php

class Propietarios_model extends CI_model {

    public function searchPropietario($bloque, $apartament) {
        $this->db->select("*");
        $this->db->from("propietarios");
        $this->db->where("bloque", $bloque );
        $this->db->where("apartamento", $apartament);
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $result = $this->db->get();

        if($result->num_rows() > 0) {
            return $result->row();
        }
        else {
            return 0;
        }
    }

    public function savePropietario($data) {
        $datos = [
            "bloque" => $data["bloque"],
            "apartamento" => $data["apartament"],
            "tp_documento" => $data["tpdocument"],
            "documento" => $data["document" ],
            "nombre" => $data["lastname"],
            "apellido" => $data["secondname"],
            "correo" => $data["email"],
            "fecha_nacimiento" => $data["nacimiento"],
            "celular" => $data["phone"],
            "tp_usuario" => $data["tpusuario"],
            "ce_nombre" => $data["cename"],
            "ce_celular" => $data["cephone"],
            "ce_parentesco" => $data["ceparentesco"],
            "id_conjunto" => $this->session->userdata("id"),
            "id_padre" => $this->session->userdata("codigo")
        ];
        $this->db->insert("propietarios", $datos);
    }

    public function validateExistPropietarioAprtament($bloque, $apartament) {
        $this->db->where("apartamento", $apartament);
        $this->db->where("bloque", $bloque);
        $result = $this->db->get("propietarios");

        if($result->num_rows() > 0){
            return 1;
        }
        else {
            return 0;
        }
    }

    public function getPropietario($document) {
        $this->db->select("*");
        $this->db->from("propietarios");
        $this->db->where("documento", $document);
        $result = $this->db->get();

        return $result;
    }

}

?>