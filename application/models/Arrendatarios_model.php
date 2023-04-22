<?php 

class Arrendatarios_model extends CI_model {

    public function saveArrendatarios($data) {
        
        $datos =  [
        "documento_propietario" => $data["document1"],
        "bloque" => $data["bloque"],
        "apartamento" => $data["apartament"] ,
        "tpdocumento" => $data["tpdocument"],
        "documento" => $data["document"],
        "fecha_nacimiento" => $data["nacimiento"] ,
        "nombre" => $data["lastname"] ,
        "apellido" => $data["secondname"],
        "correo" => $data["email"],
        "celular" => $data["phone"],
        "tpusuario" => $data["tpusuario"],
        "ce_nombre" => $data["cename"],
        "ce_celular" => $data["cephone"],
        "ce_parentesco" => $data["ceparentesco"],
        "id_conjunto" => $this->session->userdata("id"),
        "id_padre" => $this->session->userdata("codigo")
        ];
        $this->db->insert("arrendatarios", $datos);
    }


    public function validateExitArrendatario($bloque, $apartament, $document) {
        $this->db->where("apartamento", $apartament);
        $this->db->where("bloque", $bloque);
        $this->db->where("documento", $document);
        $result = $this->db->get("arrendatarios");

        if($result->num_rows() > 0){
            return 1;
        }
        else {
            return 0;
        }
    }
}

?>