<section class="ae-container-fluid ae-container-fluid--inner rk-blog">
        <div class="rk-blog__items">
          <div class="rk-blog__item">
            <div class="post-img post-9 rk-landscape-alt rk-tosquare">
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

<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        
        <div class="card-block">
                          
                    <div class="row">
                        <div class="form-group row col-sm-2">
                            <!-- dejo un espacio de col-sm-4 a la derecha -->
                        </div>
                        <div class="form-group row col-sm-6">
                            <h6 class="sub-title text-left text-info"
                                style="-webkit-text-decoration-line: underline; /* Safari */
                                    text-decoration-line: underline">Nuevo registro de artista</h6>
                        </div>
                        <div class="form-group row col-sm-2">
                            <!-- dejo un espacio de col-sm-4 a la izquierda -->
                        </div>
                    </div>
                    <!-- colocamos el formulario -->
                    <form action="" method="POST">

                        <div class="row">
                            <div class="form-group row col-sm-2">
                                <!-- dejo un espacio de col-sm-4 a la derecha -->
                            </div>
                            <div class="form-group row col-sm-6">
                                <div class="col-sm-6">
                                    <label id="id_artista" class="col-form-label animated flipInY">Nombre artista</label>
                                    <input type="text" id="id_artista" name="artista" class="form-control" placeholder="Nombre del artista">
                                </div>
                            </div>
                            <div class="form-group row col-sm-2">
                                <!-- dejo un espacio de col-sm-4 a la izquierda -->
                            </div>        
                        </div>

                        <div class="row">
                            <div class="form-group row col-sm-2">
                                <!-- dejo un espacio de col-sm-4 a la derecha -->
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="comment">Descripción:</label>
                              <textarea class="form-control" rows="5" id="descripcion" placeholder="Describe el artista...."></textarea>
                            </div>
                            <div class="form-group row col-sm-2">
                                <!-- dejo un espacio de col-sm-4 a la izquierda -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group row col-sm-2">
                                <!-- dejo un espacio de col-sm-4 a la derecha -->
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-4 ">Enviar</button>
                            <div class="form-group row col-sm-2">
                                <!-- dejo un espacio de col-sm-4 a la izquierda -->
                            </div>
                        </div>
          
                     </form>         
            
        </div>
    </div>
</div>
                      

