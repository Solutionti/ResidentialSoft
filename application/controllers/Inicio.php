<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Admin_model");
        $this->load->model("Reportes_model");
    }

    public function index() {
        $countvisitant = $this->Reportes_model->countVisitants();
        $gasto = $this->Reportes_model->countGastos();
        $pago = $this->Reportes_model->countRecaudos();
        $data = ["visitante" => $countvisitant, "gasto" => $gasto, "pago" => $pago];
        $this->load->view("administrador/inicio", $data);
    }

    public function updateAdminUser() {
        $email = $this->input->post("email");
        $phone = $this->input->post("phone");
        $address = $this->input->post("address");

        $data = [
            "email" => $email,
            "phone" => $phone,
            "address" => $address
        ];

        $this->Admin_model->updateAdminUser($data);
    }
}