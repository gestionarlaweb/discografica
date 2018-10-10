<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_Users extends CI_Model{

		
		public function obtenerUsuario($email = ''){

			$result = 	$this->db->query("SELECT * FROM usuarios WHERE email = '" .$email . "' LIMIT 1");
			if ($result->num_rows() > 0){    
				return $result->row();    // Si hay más de una fila devuelmela 
			}else{
				return null;
			}
		}

		


		
		
	}

?>