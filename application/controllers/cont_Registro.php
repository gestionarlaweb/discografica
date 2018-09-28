<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
  class cont_Registro extends CI_Model{


//http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Regitro/registrar_artista
    public function registrar_artista(){
      //Detectamos que se añade la oferta
    
    if($this->input->post("nombre")== null){  // Si no se ha introducido el nombre

       $html = $this->load->view("admin/vista_registro_artista", null, true);
       $this->load->view('landingpage', array("contenido"=>$html)  );
       
        }else{
            // 3. Aquí detecta el formulario y lo envia a la BBDD
             $this->load->model("m_admin_artistas", "admin_artistas");
             $this->admin_artistas->nuevo_artista();
        }
  }

//http://127.0.0.1/web/GitHub/DISCOGRAFICA/index.php/cont_Regitro/registrar_lp
  public function registrar_lp(){

     //Detectamos que se añade la oferta
    if($this->input->post("nombre")== null){  // Si no se ha introducido el nombre

       $html = $this->load->view("admin/vista_registro_lp", null, true);
       $this->load->view('landingpage', array("contenido"=>$html)  );
       
        }else{
            // 3. Aquí detecta el formulario y lo envia a la BBDD
             $this->load->model("m_admin_lps", "admin_lps");
             $this->admin_lps->nuevo_lp();
        }
  }


  }
?>
