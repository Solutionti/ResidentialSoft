<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basicos extends CI_Controller {

    public function __construct() {
        parent:: __construct();
    }

    public function tpDocumentos() {
        $this->load->view("administrador/tpdocumentos");
    }

    public function tpPagos() {
        $this->load->view("administrador/tppagos");
    }

    public function tpUsuarios() {
        $this->load->view("administrador/tpusuarios");
    }

    public function tpVehiculos() {
        $this->load->view("administrador/tpvehiculos");

    }

    public function tpMascotas() {
        $this->load->view("administrador/tpmascotas");

    }

    public function visitantes() {
        $this->load->view("administrador/visitantes");
    }

    public function bloques() {
        $this->load->view("administrador/bloques");
    }

    public function apartamentos() {
        $this->load->view("administrador/apartamentos");
    }
}