<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
  class cont_Registro extends CI_Controller{


   public function registrar_artista(){

      if($this->input->post("nombre")== null){  // Si no se ha introducido el nombre

           $html = $this->load->view("admin/vista_registro_artista", null, true);
           $this->load->view('landingpage', array("contenido"=>$html)  );
           
            }else{
                // 3. Aquí detecta el formulario y lo envia a la BBDD
              //print_r($this->input->post());
                 $this->load->model("m_Admin", "admin_artistas");
                 
                 $this->admin_artistas->nuevo_artista(
                       $this->input->post("nombre"),
                       $this->input->post("descripcion")
                 );
                  redirect('/index.php/cont_Artistas/artistas/');
                                
            }
                 
      } 


      public function registrar_lp(){

        $this->load->model("m_Artistas", "artistas");

        $data = array(
          'datos_recibidos' => $this->artistas->listar_nombres()
        );

          
        $html = $this->load->view('admin/vista_registro_lp', $data, true); // null, true
        $this->load->view('landingpage', array("contenido"=>$html) );

            
        if($this->input->post("lp")== null){
         
         //$this->load->view("admin/vista_registro_lp", null, true);
           
         }
         else{
            $this->load->model("m_Admin", "admin_lps");
            
            $this->admin_lps->nuevo_lp(
                    $this->input->post("artista"),
                    $this->input->post("lp"),
                    $this->input->post("descripcion")
            );
             redirect('/index.php/cont_Artistas/artistas/');
        }
      }


  } 

?>
