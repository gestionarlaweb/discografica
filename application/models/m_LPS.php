<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class m_LPS extends CI_Model{

	
		function recuperar_lps_artista(){
	 
			$tmp = $this->db
			->select("id, id_artista, nombre, descripcion")

			->WHERE ('id_artista','6')
	//	SELECT artistas.id, lp.nombre, lp.descripcion FROM artistas
			//	INNER JOIN lp
			//	ON lp.id_artista=artistas.id;
			
			->get("lp");
			
		return $tmp->result_array(); // devuelve un solo resultado.
		
		}
	}

/*

*/

?>


