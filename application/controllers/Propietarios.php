<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propietarios extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
        $this->load->model("Propietarios_model");
        $this->load->model("Generic_model");
    }

    public function index() {
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $documents = $this->Generic_model->getDocumentos();
        $data = ["bloque" => $bloques, "apartament" => $apartaments, "document" => $documents];
        $this->load->view("administrador/propietarios", $data);
    }

    public function searchPropietario() {
        $bloque = $this->input->post("bloque");
        $apartament = $this->input->post("apartament");

        $result = $this->Propietarios_model->searchPropietario($bloque, $apartament);

        if($result === 0) {
            echo "error";
        }
        else {
            echo json_encode($result);
        }
    }

    public function savePropietario() {
          $bloque = $this->input->post("bloque");
          $apartament = $this->input->post("apartament");
          $tpdocument = $this->input->post("tpdocument");
          $document = $this->input->post("document");
          $nacimiento = $this->input->post("nacimiento");
          $lastname = $this->input->post("lastname");
          $secondname = $this->input->post("secondname");
          $email = $this->input->post("email");
          $phone = $this->input->post("phone");
          $cename = $this->input->post("cename");
          $cephone = $this->input->post("cephone");
          $ceparentesco = $this->input->post("ceparentesco");
          $tpusuario = $this->input->post("tpusuario");
          
          $data = [
           "bloque" => $bloque,
           "apartament" => $apartament,
           "tpdocument" => $tpdocument,
           "document" => $document,
           "nacimiento" => $nacimiento,
           "tpusuario" => $tpusuario,
           "lastname" => $lastname,
           "secondname" => $secondname,
           "email" => $email,
           "phone" => $phone,
           "cename" => $cename,
           "cephone" => $cephone,
           "ceparentesco" => $ceparentesco
          ];
          $validate = $this->Propietarios_model->validateExistPropietarioAprtament($bloque, $apartament);

          if($validate == 0){
            $this->Propietarios_model->savePropietario($data);
          }
          else {
              echo "error";
          }
    }
}
?>