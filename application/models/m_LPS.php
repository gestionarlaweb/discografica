<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_LPS extends CI_Model{

# LISTAR USUARIOS
		function listar_lps(){
			$tmp = $this->db
			->select("id, id_artista, nombre, descripcion")
			->get("lp");

		return $tmp->result_array(); // devuelve resultados múltiples (por lo general, para usar en un bucle).
		}

		function recuperar_lps_artista(){

			$tmp = $this->db
			->select("id, id_artista, nombre, descripcion")
			->get("lp");
		return $tmp->result_array(); // devuelve un solo resultado.
		
		}
	}
?>