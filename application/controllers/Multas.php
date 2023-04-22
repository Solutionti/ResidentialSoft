<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multas extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model("Bloques_model");
        $this->load->model("Apartamentos_model");
        $this->load->model("Multas_model");
    }
	
	public function index()
	{
        $bloques = $this->Bloques_model->getBloques();
        $apartaments = $this->Apartamentos_model->getApartament();
        $data = ["bloque" => $bloques, "apartament" => $apartaments];
		$this->load->view('administrador/multas', $data);
	}

    public function searchMultas() {
        $bloque = $this->input->post("bloque");
        $apartamento = $this->input->post("apartamento");

        $multa = $this->Multas_model->searchMultas($bloque, $apartamento);

        if($multa) {
            echo  json_encode($multa);
        }
        else {
            echo "error";
        }
    }
}

?>
