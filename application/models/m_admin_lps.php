<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_admin_lps extends CI_Model{

			# INSERT Views\ofertas\crear_oferta
			// Accedemos desde el controlador http://127.0.0.1/web/PROYECTO-FINAL/index.php/proyectos/add_proyecto
		function nuevo_lp($id_artista, $nombre, $descripcion){

			$array = array(
				"id_artista"	=>	$id_artista,
				"nombre"		=>	$nombre,
				"descripcion"	=>	$descripcion
						
			);

			$this->db->insert("lp", $array);

			return true;
		}


		
		function actualizar_lp($id, $id_artista, $nombre, $descripcion){

			$this->db
				->set("id_artista", $id_artista)
				->set("nombre", $nombre)
				->set("descripcion", $descripcion)  // acordarse de que "descripcion" debe de ser igual que en la BBDD
				->where("ID", $id)
				->update("lp");


			return true;

		}

		

		function eliminar_lp($id){
		
			$this->db->where('ID', $id)->delete("lp");
			return true;
		}

	
		
	}

?>