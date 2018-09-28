<div class="container">   
   <div class="row">
        <h4>LP's en nuestra discográfica</h4>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
  
                echo '
                       <tbody>
                          <tr>
                            <td>'.$recupera_artista["id"].'</td>
                            <td>'.$recupera_artista["nombre"].'</td>
                            <td>'.$recupera_artista["descripcion"].'</td> 
                            <td>
                              <a href="'.base_url("index.php/cont_Lps/lps_artista/".$bucle["id"]).'">
                              <button class="btn btn-outline-info btn-sm">LPs</button> 
                              </a>
                            </td>
                          </tr>
                        </tbody>      
                      ';
                 ?>
             </table>
        </div>
    </div>  
</div>