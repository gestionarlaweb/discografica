<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_Admin extends CI_Model{

		function nuevo_artista($nombre, $descripcion){
		

			$array = array(
				"nombre"		=>	$nombre,
				"descripcion"	=>	$descripcion
			);

			$this->db->insert("artistas", $array);
		
			return true;
		}

		


		function nuevo_lp($artista, $lp, $descripcion){

			$array = array(
				"id_artista"	=>	$artista, 
				"nombre"		=>	$lp,
				"descripcion"	=>	$descripcion
						
			);

			$this->db->insert("lp", $array);

			return true;
		}
		
	}

?>