<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pqrs extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Pqrs_model");
    }

    public function index() {
        $this->load->view("administrador/pqrs");
    }

    public function searchPqrs() {
        $radicado = $this->input->post("radicado");

        $result = $this->Pqrs_model->searchPqrs($radicado);

        if($result === 0) {
           echo "error";
        }
        else {
           echo json_encode($result);     
        }
    }

    public function responderPqrs() {
        $radicado = $this->input->post("radicado");
        $date = $this->input->post("resdate");
        $estado = $this->input->post("resestado");
        $mensaje = $this->input->post("resmensaje");
        $email = $this->input->post("email");
        
        $data = [
            "radicado" => $radicado,
            "date" => $date,
            "estado" => $estado,
            "mensaje" => $mensaje   
        ];

        $this->Pqrs_model->responderPqrs($data);

    }
}