<section class="ae-container-fluid ae-container-fluid--inner rk-blog">
        <div class="rk-blog__items">
          <div class="rk-blog__item">
            <div class="post-img post-9 rk-landscape-alt rk-tosquare">
              <div class="item-meta">
              </div> 
            </div>          
          </div>     
        </div>
</section>
<div class="container">   
   <div class="row">
     <h4>LP's del artista</h4>  
        <div class="col-md-12">
          <?php $contador = 0; ?>
  
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>LP</th>
                    <th>Descripción</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
                                // ($proyectos) definido en el controlador del Proyectos dentro de la función listar()
                    foreach ($lps_artista as $bucle) {
                      $contador ++;

                echo '
                       <tbody>
                          <tr>
                            <td>'.$bucle["nombre"].'</td>
                            <td>'.$bucle["descripcion"].'</td> 
                           <td></td>
                          </tr>
                        </tbody>      
                      ';                      
                     }echo '<p>Total Lps del artista en la nuestra base de datos : '.$contador.'</p>';

                ?>
             </table>
             <a href="<?php echo base_url("/index.php/cont_Artistas/artistas");?>" 
              <button type="submit" class="btn btn-outline-info btn-sm ">Volver</button>
             </a>
 
        </div>
    </div>  
</div>
