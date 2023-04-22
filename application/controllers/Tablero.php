<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tablero extends CI_Controller {
    
    public function __construct() {
        parent:: __construct();
        $this->load->model("Asamblea_model");
    }

    public function index() {
        $preguntas1 = $this->Asamblea_model->getVotoBasico();
        $data = [
            "preguntas1" => $preguntas1
        ];
        $this->load->view("administrador/tablero", $data);
    }

    
    public function questionAsamblea() {
        $this->load->view("administrador/preguntas");
    }

    public function countAmountSi() {
        $valor = $this->Asamblea_model->countAmountSi();

        echo json_encode($valor->si);
    }
    public function countAmountNo() {
        $valor = $this->Asamblea_model->countAmountNo();

        echo json_encode($valor->si);
    }
    public function countAmountBlanco() {
        $valor = $this->Asamblea_model->countAmountBlanco();

        echo json_encode($valor->si);
    }

    //tablero multiple

    public function tablero2() {
        $preguntas1 = $this->Asamblea_model->getVotoMultiple();
        $data = [
            "preguntas1" => $preguntas1
        ];
        $this->load->view("administrador/tablero2", $data);
    }

    public function contarRespuesta1() {
        $valor = $this->Asamblea_model->contarRespuesta1();

        echo json_encode($valor->res1);
    }

    public function contarRespuesta2() {
        $valor = $this->Asamblea_model->contarRespuesta2();

        echo json_encode($valor->res2);
    }

    public function contarRespuesta3() {
        $valor = $this->Asamblea_model->contarRespuesta3();

        echo json_encode($valor->res3);
    }

    public function contarRespuesta4() {
        $valor = $this->Asamblea_model->contarRespuesta4();

        echo json_encode($valor->res4);
    }

    public function contarRespuesta5() {
        $valor = $this->Asamblea_model->contarRespuesta5();

        echo json_encode($valor->res5);
    }
}
?>