<?php 

class Login_model extends CI_Model {

    public function loginAdmin($user, $password){
		$this->db->select("*");
		$this->db->from("administradores");
		$this->db->where("usuario", $user);
		$this->db->where("estado", 101001);
		$resultados = $this->db->get();		

		if($resultados->num_rows()>0) {
			$contador = 0;
			$rowSelect = [];
			foreach ($resultados->result() as $value){
				$passAct = $value->password;
				if(password_verify($password, $passAct)){
					$contador++;
					$rowSelect = $value;
				}
			}
			if($contador == 1){
				return $rowSelect;	
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}


    public function createSesion($data) {
        $this->session->set_userdata($data);
    }

    public function logout() {
        $this->session->sess_destroy();
		redirect(base_url());
    }

}

?>