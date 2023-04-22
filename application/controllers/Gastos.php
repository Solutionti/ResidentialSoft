<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
        $this->load->model("Gastos_model");
    }

    public function index() {
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $data = ["bloque" => $bloques, "apartament" => $apartaments];
        $this->load->view("administrador/gastos", $data);
    }

    public function saveGastos() {
        $document = $this->input->post("document");
        $name = $this->input->post("name");
        $date = $this->input->post("date");
        $nitprov = $this->input->post("nitprov");
        $nameprov = $this->input->post("nameprov");
        $value = $this->input->post("value");
        $concepto = $this->input->post("concepto");
        $novedad = $this->input->post("novedad");

        $data = [
           "document" => $document,
           "name" => $name,
           "date" => $date,
           "nitprov" => $nitprov,
           "nameprov" => $nameprov,
           "value" => $value,
           "concepto" => $concepto,
           "novedad" => $novedad
        ];

        $this->Gastos_model->saveGastos($data);
    }
}