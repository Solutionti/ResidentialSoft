<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clasificados extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Clasificados_model");
    }

    public function index() {
        $clasificadosventa = $this->Clasificados_model->getClasificadosArriendoVentas();
        $servicios = $this->Clasificados_model->getClasificadosServicios();
        $data = ["venta" => $clasificadosventa, "servicio" => $servicios ];
        $this->load->view("administrador/clasificados", $data);
    }
}