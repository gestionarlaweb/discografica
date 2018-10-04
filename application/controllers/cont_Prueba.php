<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont_Prueba extends CI_Controller {

	// Testear MODELO m_LPS
		// LPS
		// Cargo el modelo m_LPS
		// $this->load->model("m_LPS", "lps");
        // $lps = $this->lps->recuperar_lps_artista();
	    // echo json_encode($lps);

		public function ver(){

			$this->load->model("m_Prueba", "prueba");

			$data = array(
				'datos_recibidos' => $this->prueba->listar_nombres()
			);

			$this->load->view('admin/vista_pruebas', $data);

		}


	}
?>