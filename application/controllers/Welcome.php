<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
		// Por defecto le cargo la vista de Artistas
		/*	$this->load->model("m_Artistas", "artistas");
	        $artistas =$this->artistas->listar_artistas();
	    	$html = $this->load->view("artistas/vista_artistas", array("bucle_artistas"=>$artistas), true);  
			$this->load->view('landingpage', array("contenido"=>$html)  ); 
		*/

			$html = $this->load->view("admin/vista_registro_artista", null, true);
			$this->load->view('landingpage', array("contenido"=>$html)  );

			//$html = $this->load->view("admin/vista_registro_lp", null, true);
			//$this->load->view('landingpage', array("contenido"=>$html)  );
		
		


	}
}
