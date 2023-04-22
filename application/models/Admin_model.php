<?php

class Admin_model extends CI_model {

    public function updateAdminUser($data) {
        
        $datos = [
            "direccion" => $data["address"],
            "telefono" => $data["phone"],
            "correo" => $data["email"]
        ];
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $this->db->where("id_administrador", $this->session->userdata("codigo"));
        $this->db->update("administradores", $datos);
    }
}

?>