<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Artistas extends CI_Controller {

	// Testear MODELO m_Artistas
		// ARTISTAS
		// Cargo el modelo m_Artistas
		// $this->load->model("m_Artistas", "artistas");
        // $artistas = $this->artistas->listar_artistas();
	    // echo json_encode($artistas);

	// http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Artistas/artistas
	
	public function artistas(){
	
		$this->load->model("m_Artistas", "artistas");
        $artistas =$this->artistas->listar_artistas();
     
		$html = $this->load->view("artistas/vista_artistas", array("bucle_artistas"=>$artistas), true); 
		$this->load->view('landingpage', array("contenido"=>$html)  ); 
	}

	
}

?>