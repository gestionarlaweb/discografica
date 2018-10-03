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
                     }echo '<p>Total Lps del artista en la Base de Datos : '.$contador.'</p>';

                ?>
             </table>
             <a href="<?php echo base_url("/index.php/cont_Artistas/artistas");?>" 
              <button type="submit" class="btn btn-outline-info btn-sm ">Volver</button>
             </a>
 
        </div>
    </div>  
</div>