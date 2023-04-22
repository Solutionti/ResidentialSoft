<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartamentos extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
    }

    public function index() {
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $data = ["bloque" => $bloques, "apartament" => $apartaments];
        $this->load->view("administrador/apartamentos", $data);
    }

    public function insertApartament() {
        $bloque = $this->input->post("bloque");
        $apartament = $this->input->post("apartament");

        $data = [
            "bloque" => $bloque,
            "apartament" => $apartament
        ];
        $this->Apartamentos_model->insertApartament($data);
    }

    
}