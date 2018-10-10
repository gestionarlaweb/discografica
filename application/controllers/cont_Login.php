<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Login extends CI_Controller
{
	
	public function logeado(){

		// Recordar que hay que destruir la session en el controlador cont_Registro con $this->session->sess_destroy();
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//echo $email . " " . $password;

		$this->load->model("m_Users", "user");
		$fila = $this->user->obtenerUsuario($email); 

		if($fila != null){  // Si hay email entra aquí
			if($fila->password == $password){
				$data = array(
				'email' => $email,
				'id'	=> $fila->id,
				'login' => true  // 0    true 1
				);
				// agregar los datos del array $data a una variable de sesion
				$this->session->set_userdata($data);// desde el objeto SESSION y la función set_userdata recorremos el array y obtenemos el valor
				// echo $this->session->userdata('id'); // pasandoselo al userdata
				header("Location: " . base_url("/index.php/cont_Registro/registrar_lp/")); 
				//site_url("cont_Artistas/");
			}else{
				header("Location: " . base_url()); // Devuelveme a la página de inicio si no se autentificado correctamente
			}
		}else{
			header("Location: " . base_url()); // Devuelveme a la página de inicio si no hay datos en EMAIL
		}	
	}



	public function logout(){

		$this->session->sess_destroy();  // destruir la sesión
		header("Location:" . base_url());
	}
}

?>