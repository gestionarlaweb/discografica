<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		// $this->load->view('welcome_message');
		
		// ARTISTAS
		// Cargo el Modelo m_Artistas
		//$this->load->model("m_Artistas", "artistas");
	      //  $artis["artis"]=$this->artistas->listar_artistas();
    
			// Cargo la vista vista_Artistas
      //  $html = $this->load->view("artistas/vista_artistas", $artis, true);  


		// LPS
		// Cargo el modelo m_LPS
		// $this->load->model("m_LPS", "lps");
      //  $lp["lp"]=$this->lps->listar_lps();

			// Cargo la vista vista_lps
      //  $html = $this->load->view("lps/vista_lps", $lp, true);



	}
}
