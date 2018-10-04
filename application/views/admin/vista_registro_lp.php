

<script type="text/javascript">
    
    function displayArtista() {

      var selectElem = document.getElementById('id_artista')
        var resultado = selectElem.value;
        
       var e = document.getElementById("id_nombre");

        if (  resultado != 0 ){
         console.log("hay algo, activa el menú"); 
        e.removeAttribute("disabled");   
        }
        else{
         console.log("no hay nada, sigue sin activar el menú");
         e.setAttribute('disabled','disabled');
        }
}
</script>

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
                                    text-decoration-line: underline">Nuevo registro de LP</h6>
                        </div>
                        <div class="form-group row col-sm-2">
                            <!-- dejo un espacio de col-sm-4 a la izquierda -->
                        </div>
                    </div>                                    

                    <!-- colocamos el formulario -->
                    <form action="" method="POST">

                        <div class="row">
                            <div class="form-group row col-sm-2">
                                <!-- dejo un espacio de col-sm-4 a la derecha  -->   
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Artista</label>
                                <div class="col-sm-8">
                                    
                                    <select id="id_artista" name="artista" class="form-control" value_default="0" onchange="displayArtista();">
                                        <?php foreach ($datos_recibidos->result() as $nom) : ?>
                                            <option value="<?php echo $nom->id ?>"><?php echo $nom->nombre ?> </option>
                                        <?php endforeach; ?> 
                                    </select>
                                </div>
                            </div>                        
                            <div class="form-group row col-sm-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group row col-sm-2">
                            </div>
                            <div class="form-group row col-sm-6">
                                <div class="col-sm-6">
                                    <label class="col-form-label animated flipInY">Nombre LP</label>
                                    <input id="id_nombre" type="text" id="id_lp" name="lp" class="form-control" placeholder="Nombre del LP" disabled="">
                                </div>
                            </div>
                            <div class="form-group row col-sm-2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group row col-sm-2">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="comment">Descripción:</label>
                              <textarea class="form-control" rows="5" name="descripcion" placeholder="Describe el artista...."></textarea>
                            </div>
                            <div class="form-group row col-sm-2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group row col-sm-2">
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-4 ">Enviar</button>
                            <div class="form-group row col-sm-2">
                            </div>
                        </div>
          
                     </form>         
            
        </div>
    </div>
</div>

