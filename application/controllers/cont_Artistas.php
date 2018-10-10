<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Artistas extends CI_Controller {

	public function index(){
		
		// Testear MODELO m_Artistas
		// ARTISTAS
		// Cargo el modelo m_Artistas
		// $this->load->model("m_Artistas", "artistas");
        // $artistas = $this->artistas->listar_artistas();
	    // echo json_encode($artistas);
	}

	

	public function artistas(){

		
		$this->load->model("m_Artistas", "artistas");
        $artistas =$this->artistas->listar_artistas();
       
     
		$html = $this->load->view("artistas/vista_artistas", array("bucle_artistas"=>$artistas), true); 
		$this->load->view('landingpage', array("contenido"=>$html)  ); 
	}
	
	
}

?>