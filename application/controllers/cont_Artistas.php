<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Artistas extends CI_Controller {

	// http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Artistas/artistas
	public function artistas(){
	
		$this->load->model("m_Artistas", "artistas");
        $artistas =$this->artistas->listar_artistas();
     
		$html = $this->load->view("artistas/vista_artistas", array("bucle_artistas"=>$artistas), true); 
		$this->load->view('landingpage', array("contenido"=>$html)  ); 


	}

	// http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Artistas/recuperar_uno
	public function recuperar_uno($id){

		
		$this->load->model("m_Artistas", "artistas");
       	$artista = $this->artistas->recupera_artista($id);
       	
       	$html = $this->load->view("artistas/vista_artista_uno", array("recupera_artista"=>$artista), true); 
		$this->load->view('landingpage', array("contenido"=>$html)  ); // La vista se la paso a la variable ("contenido") que está 



	}
}