<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_Admin extends CI_Model{

			# INSERT Views\ofertas\crear_oferta
			// Accedemos desde el controlador http://127.0.0.1/web/PROYECTO-FINAL/index.php/m_admin_artistas/nuevo_artista
		function nuevo_artista($nombre, $descripcion){
		

			$array = array(
				"nombre"		=>	$nombre,
				"descripcion"	=>	$descripcion
			);

			$this->db->insert("artistas", $array);
			/* Le podriamos añadir esta parte
			if ( $this->db->affected_rows() == 1 ) {
		        return true; // si inserta algo es verdadero
		      }else {
		        return false;  // si no falso
		      }
			}
			*/

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