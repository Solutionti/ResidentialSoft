<?php

class Asamblea_model extends CI_model {

    public function getVotoBasico() {
        $this->db->select("*");
        $this->db->from("votacion1");
        $result = $this->db->get();

        return $result;
    }
    public function getVotoMultiple() {
        $this->db->select("*");
        $this->db->from("votacion2");
        $result = $this->db->get();

        return $result;
    }
    public function countAmountSi() {
        $sql = "select count(codigo_votosim) as si from voto_simple where respuesta = 1";
        $result = $this->db->query($sql);

        return $result->row();
    }
    public function countAmountNo() {
        $sql = "select count(codigo_votosim) as si from voto_simple  where respuesta = 2";
        $result = $this->db->query($sql);

        return $result->row();
    }
    public function countAmountBlanco() {
        $sql = "select count(codigo_votosim) as si from voto_simple where respuesta = 0";
        $result = $this->db->query($sql);

        return $result->row();
    }

    // voto multiple

    public function contarRespuesta1() {
        $sql = "select count(codigo_votomult) as res1 from voto_multiple where respuesta = 1";
        $result = $this->db->query($sql);

        return $result->row();
    }

    public function contarRespuesta2() {
        $sql = "select count(codigo_votomult) as res2 from voto_multiple where respuesta = 2";
        $result = $this->db->query($sql);

        return $result->row();
    }

    public function contarRespuesta3() {
        $sql = "select count(codigo_votomult) as res3 from voto_multiple where respuesta = 3";
        $result = $this->db->query($sql);

        return $result->row();
    }

    public function contarRespuesta4() {
        $sql = "select count(codigo_votomult) as res4 from voto_multiple where respuesta = 4";
        $result = $this->db->query($sql);

        return $result->row();
    }

    public function contarRespuesta5() {
        $sql = "select count(codigo_votomult) as res5 from voto_multiple where respuesta = 5";
        $result = $this->db->query($sql);

        return $result->row();
    }
}

?>