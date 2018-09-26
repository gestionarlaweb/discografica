<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Artistas extends CI_Controller {

	
	public function artistas()
	{
		// Testear MODELO m_Artistas
		// http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Artistas/artistas
		// ARTISTAS
		// Cargo el Modelo m_Artistas
		$this->load->model("m_Artistas", "artistas");
        $artistas =$this->artistas->listar_artistas();
       // echo json_encode($artistas);

       // 3. Cargamos los datos en la vista                
	//	$html = $this->load->view("artistas/vista_artistas", null, true);  // El TRUE me lo guarda en una variable, en este caso $HTML
		$html = $this->load->view("artistas/vista_artistas", array("bucle_artistas"=>$artistas), true); // Para tratarlos en un blucle después en la vista
		$this->load->view('landingpage', array("contenido"=>$html)  ); // La vista se la paso a la variable ("contenido") que está en la línea 87 en la vista (ofertas)


	}
}