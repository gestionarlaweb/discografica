<div class="container">   
   <div class="row">
     <h4>LP's del artista</h4>  
        <div class="col-md-12">
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

                echo '
                       <tbody>
                          <tr>
                            <td>'.$bucle["nombre"].'</td>
                            <td>'.$bucle["descripcion"].'</td> 
                            <td></td>
                          </tr>
                        </tbody>      
                      ';
                     }
                ?>
             </table>
        </div>
    </div>  
</div>