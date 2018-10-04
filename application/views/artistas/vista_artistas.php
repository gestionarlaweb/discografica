  
  <section class="ae-container-fluid ae-container-fluid--inner rk-blog">
        <div class="rk-blog__items">
          <div class="rk-blog__item">
            <div class="post-img post-1 rk-landscape-alt rk-tosquare">
              <div class="item-meta">
              </div> 
            </div>
            <div class="blog-info">
              <h2 class="blog-info__title"> <a href="artistas">Los mejores artistas aquí !</a></h2>
              <h5 class="blog-info__author">Todo <a href="artistas" class="ae-u-bolder">música !</a></h5>
              <p class="blog-info__excerpt">Facilitamos a los grupos noveles todos los mecanismos para que sus discos y sus canciones encuentren un lugar en el mercado actual, donde los nuevos instrumentos de creación y difusión han dado un giro radical a la industria de la música.
              También damos servicios de consultoría, management, editorial, prensa y estrategias de marketing, para contribuir, junto con la creación de un producto de calidad, al lanzamiento de los nuevos artistas</p>
            </div>
           
          </div>     
        </div>
      </section>



<div class="container">   
   <div class="row">
        <h4>Artistas en nuestra discográfica</h4>
        <div class="col-md-12">
           <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Artista</th>
                    <th>Descripción</th>
                    <th>Ver</th>
                  </tr>
                </thead>
                <?php 
                foreach ($bucle_artistas as $bucle) {

                echo '
                       <tbody>
                          <tr>
                            <td>'.$bucle["nombre"].'</td>
                            <td>'.$bucle["descripcion"].'</td> 
                            <td>
                              <a href="'.base_url("index.php/cont_Lps/lps_artista/".$bucle["id"]).'">
                              <button class="btn btn-outline-info btn-sm">LPs</button> 
                              </a>
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
 