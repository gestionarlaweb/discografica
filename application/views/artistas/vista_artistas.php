<div class="container">   
   <div class="row">
        <h4>Artistas en nuestra discográfica</h4>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Artista</th>
                    <th>Descripción</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
                                // ($proyectos) definido en el controlador del Proyectos dentro de la función listar()
                    foreach ($bucle_artistas as $bucle) {

                echo '
                       <tbody>
                          <tr>
                            <td>'.$bucle["nombre"].'</td>
                            <td>'.$bucle["descripcion"].'</td> 
                            <td>
                              <button type="submit" <a href="lps" class="btn btn-outline-info btn-sm">LPs</button>
                            </td>
                          </tr>
                        </tbody>      
                      ';
                     }
                ?>
             </table>
        </div>
    </div>  
</div>
 