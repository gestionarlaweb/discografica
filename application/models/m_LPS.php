<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_LPS extends CI_Model{

	
		function recuperar_lps_artista($id){
	 		
			$tmp = $this->db
			->select("id, id_artista, nombre, descripcion")
			->WHERE ('id_artista',$id)
			->get("lp");
		
		return $tmp->result_array(); 
		
		}
		
	}

?>


