<section class="ae-container-fluid ae-container-fluid--inner rk-blog">
        <div class="rk-blog__items">
          <div class="rk-blog__item">
            <div class="post-img post-2 rk-landscape-alt rk-tosquare">
              <div class="item-meta">
                <p><a href="artistas" class="arrow-button">Últimos LP's<span class="arrow-cont">
                      <svg>
                        <use xlink:href="<?php echo CDN;?>/assets/img/symbols.svg#arrow"></use>
                      </svg></span></a></p>
              </div>
            </div>
          </div>     
        </div>
</section>

<div class="container">   
   <div class="row">
        <h4>LP's en nuestra discográfica</h4>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Artista</th>
                    <th>LP</th>
                    <th>Descripción</th>
                    <th></th>
                  </tr>
                </thead>
                <?php
                                // ($proyectos) definido en el controlador del Proyectos dentro de la función listar()
                    foreach ($bucle_lps as $bucle) {

                echo '
                       <tbody>
                          <tr>
                            <td>'.$bucle["id"].'</td>
                            <td>'.$bucle["id_artista"].'</td>
                            <td>'.$bucle["nombre"].'</td>
                            <td>'.$bucle["descripcion"].'</td> 
                            <td>
                            <a href="'.base_url("index.php/cont_Artistas/recuperar_uno/".$bucle["id"]).'">
                              <button class="btn btn-outline-info btn-sm">Artista</button>
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