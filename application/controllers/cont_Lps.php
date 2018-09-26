<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Lps extends CI_Controller {

	
	public function lps()
	{
		// Testear MODELO m_LPS
		// http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Lps/lps
		// LPS
		// Cargo el modelo m_LPS
		// $this->load->model("m_LPS", "lps");
        // $lps = $this->lps->listar_lps();
	    // echo json_encode($lps);


	     $this->load->model("m_LPS", "lps");
       	 $lps = $this->lps->listar_lps();
      
       // 3. Cargamos los datos en la vista                
	//	$html = $this->load->view("lps/vista_lps", null, true);  // El TRUE me lo guarda en una variable, en este caso $HTML
		$html = $this->load->view("lps/vista_lps", array("bucle_lps"=>$lps), true); // Para tratarlos en un blucle después en la vista
		$this->load->view('landingpage', array("contenido"=>$html)  ); // La vista se la paso a la variable ("contenido") que está en la línea 87 en la vista (ofertas)


		



	}
}
