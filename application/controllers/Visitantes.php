<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitantes extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
        $this->load->model("Visitantes_model");
    }

    public function index() {
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $data = ["bloque" => $bloques, "apartament" => $apartaments];
        $this->load->view("administrador/visitantes", $data);
    }

    public function searchVisitante() {
        $document = $this->input->post("document");

        $result = $this->Visitantes_model->searchVisitante($document);

        if($result === 0){
            echo "error";
        }
        else {
            echo json_encode($result);
        }
    }

    public function insertVisitantes() {
        $document = $this->input->post("document");
        $name = $this->input->post("name");
        $lastname = $this->input->post("lastname");
        $bloque = $this->input->post("bloque");
        $apartament = $this->input->post("apartament");
        $description = $this->input->post("description");
        
        $datos = [
            "document" => $document,
            "name" => $name,
            "lastname" => $lastname,
            "bloque" => $bloque,
            "apartament" => $apartament,
            "description" => $description
        ];
        $this->Visitantes_model->insertVisitantes($datos);
    }
}