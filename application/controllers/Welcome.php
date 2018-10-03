<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
		$this->load->model("m_Artistas", "artistas");
        $artistas =$this->artistas->listar_artistas();
     
		$html = $this->load->view("artistas/vista_artistas", array("bucle_artistas"=>$artistas), true); 
		$this->load->view('landingpage', array("contenido"=>$html)  ); 

	}
}
