<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arrendatarios extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
        $this->load->model("Arrendatarios_model");
        $this->load->model("Generic_model");
    }

    public function index() {
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $documents = $this->Generic_model->getDocumentos();
        $data = ["bloque" => $bloques, "apartament" => $apartaments, "document" => $documents];
        $this->load->view("administrador/arrendatarios", $data);
    }

    public function saveArrendatarios() {
        $bloque = $this->input->post("bloque"); 
        $apartament = $this->input->post("apartament"); 
        $document1 = $this->input->post("document1");
        $tpdocument = $this->input->post("tpdocument");
        $document = $this->input->post("document");
        $nacimiento = $this->input->post("nacimiento");
        $lastname = $this->input->post("lastname");
        $secondname = $this->input->post("secondname");
        $email = $this->input->post("email");
        $phone = $this->input->post("phone");
        $tpusuario = $this->input->post("tpusuario");
        $cename = $this->input->post("cename");
        $cephone = $this->input->post("cephone");
        $ceparentesco = $this->input->post("ceparentesco");

        $data = [
            "bloque" => $bloque,
            "apartament" => $apartament,
            "document1" => $document1,
            "tpdocument" => $tpdocument,
            "document" => $document,
            "nacimiento" => $nacimiento,
            "lastname" => $lastname,
            "secondname" => $secondname,
            "email" => $email,
            "phone" => $phone,
            "tpusuario" => $tpusuario,
            "cename" => $cename,
            "cephone" => $cephone,
            "ceparentesco" => $ceparentesco,
        ];
        $exist = $this->Arrendatarios_model->validateExitArrendatario($bloque, $apartament, $document);
        if ($exist === 0) {
            $this->Arrendatarios_model->saveArrendatarios($data);
        }
        else {
            echo "error";
        }
    }
}
?>