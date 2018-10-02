<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Lps extends CI_Controller {

	// Testear MODELO m_LPS
		// LPS
		// Cargo el modelo m_LPS
		// $this->load->model("m_LPS", "lps");
        // $lps = $this->lps->recuperar_lps_artista();
	    // echo json_encode($lps);

// http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Lps/lps_artista
// Recupero los Lp's del artista seleccionado en la Vista Artistas	
		public function lps_artista(){

			$this->load->model("m_LPS", "lps");
	       	$lp = $this->lps->recuperar_lps_artista();
	       	
	       	$html = $this->load->view("lps/vista_lps_artista", array("lps_artista"=>$lp), true); 
			$this->load->view('landingpage', array("contenido"=>$html)  );
		}


	}
?>
