<?php 

class Clasificados_model extends CI_Model {

    public function getClasificadosArriendoVentas() {
        $this->db->select("*");
        $this->db->from("clasificados");
        $this->db->group_start();
        $this->db->where("tp_clasificado", "arriendo");
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $this->db->or_where("tp_clasificado", "venta");
        $this->db->group_end();
        $result = $this->db->get();

        return $result;
    }

    public function getClasificadosServicios() {
        $this->db->select("*");
        $this->db->from("clasificados");
        $this->db->group_start();
        $this->db->where("tp_clasificado", "vendo");
        $this->db->where("id_conjunto", $this->session->userdata("id"));
        $this->db->or_where("tp_clasificado", "necesito");
        $this->db->group_end();
        $result = $this->db->get();

        return $result;
    }

}

?>