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
           
		$html = $this->load->view("lps/vista_lps", array("bucle_lps"=>$lps), true); 
		$this->load->view('landingpage', array("contenido"=>$html)  ); 

	}

	public function lps_artista(){

		$this->load->model("m_LPS", "lps");
       	$lp = $this->lps->recuperar_lps_artista();
       	
       	$html = $this->load->view("lps/vista_lps_artista", array("lps_artista"=>$lp), true); 
		$this->load->view('landingpage', array("contenido"=>$html)  );
	}
}
