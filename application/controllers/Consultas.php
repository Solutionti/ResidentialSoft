<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Reportes_model");
        
    }

    public function index() {
        $countvisitant = $this->Reportes_model->countVisitants();
        $gasto = $this->Reportes_model->countGastos();
        $pago = $this->Reportes_model->countRecaudos();
        $data = ["visitante" => $countvisitant, "gasto" => $gasto, "pago" => $pago];
       $this->load->view("administrador/consultas", $data); 
    }

}