<?php
class Trasteos_model extends CI_model {

    public function saveTrasteos($data) {
        $datos = [
           "bloque" => $data["bloque"],
           "apartamento" => $data["apartament"],
           "documento" => $data["document"],
           "fecha" => $data["date"],
           "tp_trasteo" => $data["tptrasteo"],
           "pazysalvo" => $data["pazysalvo"],
           "aprobado" => $data["aprobado"],
           "id_conjunto" => $this->session->userdata("id"),
           "id_padre" => $this->session->userdata("codigo")
        ];
         $this->db->insert("trasteos", $datos);
    }

    public function getUltimoTrasteo() {
        $id = $this->session->userdata("id");
        $codigo = $this->session->userdata("codigo");
        $sql = "select max(codigo_trasteo)as ultimo from trasteos where id_conjunto = $id  and id_padre = $codigo";
        $result = $this->db->query($sql);

        return $result->row();
    }
}
?>