<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}

	public function loginAdmin() {
		$this->load->model("Login_model");
		$user =  $this->input->post("user");
		$password = $this->input->post("password");
 
		$resp = $this->Login_model->loginAdmin($user, $password);
 
		if($resp){
			 $data = [
				 "id" =>  $resp->id_conjunto,
				 "codigo" => $resp->documento,
				 "name" => $resp->nombre,
				 "lastname" => $resp->apellido,
				 "email" => $resp->correo,
				 "phone" => $resp->telefono,
				 "address" => $resp->direccion,
				 "city" => $resp->ciudad,
				 "departament" => $resp->departamento,
				 "login" => true
			 ];
			 $this->session->set_userdata($data);
			 
		}
		else {
			echo  "error";
		}
	 }
 
	 public function logout() {
		 $this->session->sess_destroy();
		 redirect(base_url());
	 }
}
