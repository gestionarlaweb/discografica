<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_admin_artistas extends CI_Model{

			# INSERT Views\ofertas\crear_oferta
			// Accedemos desde el controlador http://127.0.0.1/web/PROYECTO-FINAL/index.php/m_admin_artistas/nuevo_artista
		function nuevo_artista($nombre, $descripcion){

			$array = array(
				"nombre"		=>	$nombre,
				"descripcion"	=>	$descripcion
						
			);

			$this->db->insert("artistas", $array);

			return true;
		}


		
		function actualizar_artista($id, $nombre, $descripcion){

			$this->db
				->set("nombre", $nombre)
				->set("descripcion", $descripcion)  // acordarse de que "descripcion" debe de ser igual que en la BBDD
				->where("ID", $id)
				->update("artistas");


			return true;

		}

		

		function eliminar_artista($id){
		
			$this->db->where('ID', $id)->delete("artistas");
			return true;
		}

	
		
	}

?>