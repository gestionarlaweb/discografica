<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Lps extends CI_Controller {

	// Testear MODELO m_LPS
		// LPS
		// Cargo el modelo m_LPS
		// $this->load->model("m_LPS", "lps");
        // $lps = $this->lps->recuperar_lps_artista();
	    // echo json_encode($lps);

		public function lps_artista(){
			

			$this->load->model("m_LPS", "lps");

			$lp = $this->lps->recuperar_lps_artista(
				$this->input->post('$id')
			);
	       	
	      
	       	$html = $this->load->view("lps/vista_lps_artista", array("lps_artista"=>$lp), true); 
	      	$this->load->view('landingpage', array("contenido"=>$html)  );

		}


	}
?>
