<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_Artistas extends CI_Model{


# LISTAR Artistas
		function listar_artistas(){
			$tmp = $this->db
			->select("id, nombre, descripcion")
			->order_by("nombre", "asc")  // asc Ascendente    desc Descendente
			->get("artistas");
			
		return $tmp->result_array(); 
		}

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