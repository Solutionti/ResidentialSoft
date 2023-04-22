<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trasteos extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
        $this->load->model("Trasteos_model");
        $this->load->model("Propietarios_model");
    }

    public function index() {
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $data = ["bloque" => $bloques, "apartament" => $apartaments];
        $this->load->view("administrador/trasteos", $data);
    }

    public function saveTrasteos() {
        $bloque = $this->input->post("bloque"); 
        $apartament = $this->input->post("apartament"); 
        $document = $this->input->post("document"); 
        $date = $this->input->post("date"); 
        $tptrasteo = $this->input->post("tptrasteo"); 
        $pazysalvo = $this->input->post("pazysalvo"); 
        $aprobado = $this->input->post("aprobado");

        $data =  [
            "bloque" => $bloque,
            "apartament" => $apartament,
            "document" => $document,
            "date" => $date,
            "tptrasteo" => $tptrasteo,
            "pazysalvo" => $pazysalvo,
            "aprobado" => $aprobado
        ];
        $this->Trasteos_model->saveTrasteos($data);
    }

    public function cargardocumento() {
        $this->load->library("pdf");
        $pdfAct = new Pdf();
        $document = $this->input->post("document");
        $fecha = $this->input->post("date");
        $trasteo = $this->Propietarios_model->getPropietario($document);
        $ultimo = $this->Trasteos_model->getUltimoTrasteo();
        $data = ["trasteo" => $trasteo, "ultimo" => $ultimo->ultimo, "fecha" => $fecha];
        $this->load->view('administrador/documentos/trasteos.php', $data);
    }
}