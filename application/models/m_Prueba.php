<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_Prueba extends CI_Model{


# LISTAR Artistas
		function listar_nombres(){
			
			$consulta = $this->db->get('artistas');
			if ($consulta->num_rows() > 0){
				return $consulta;
			} else{
				return false;
			}
		}
	}
?>