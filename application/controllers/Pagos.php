<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
        $this->load->model("Pagos_model");
    }

    public function index() {
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $data = ["bloque" => $bloques, "apartament" => $apartaments];
        $this->load->view("administrador/pagos", $data);
    }

    public function searchPayments() {
        $bloque = $this->input->post("bloque");
        $apartamento = $this->input->post("apartament");
        $month = $this->input->post("month");
        $year = $this->input->post("year");
        $pay = $this->Pagos_model->searchPayments($bloque,$apartamento,$month,$year);

        if($pay) {
            echo  json_encode($pay);
        }
        else {
            echo "error";
        }
    }

    public function savePagos() {
        $bloque = $this->input->post("bloque");
        $apartament = $this->input->post("apartament");
        $mes = $this->input->post("mes");
        $years = $this->input->post("years");
        $date = $this->input->post("date");
        $value = $this->input->post("value");
        $description = $this->input->post("description");

        $data  = [
            "bloque" => $bloque,
            "apartament" => $apartament,
            "mes" => $mes,
            "years" => $years,
            "date" => $date,
            "value" => $value,
            "description" => $description
        ];

        $this->Pagos_model->savePagos($data);
    }

    public function generarDocumentoPago() {
        $this->load->library("pdf");
        $pdfAct = new Pdf();
        $this->load->view('administrador/documentos/pagos');
    }
}