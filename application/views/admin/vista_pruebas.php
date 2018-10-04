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

                    <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Artista</th>
                  
                  </tr>
                </thead>
            <select>
                <?php foreach ($datos_recibidos->result() as $nom) : ?>
                    <option value="<?php echo $nom->id ?>"><?php echo $nom->nombre ?> </option>
                <?php endforeach; ?> 
            </select>
                </table>

                                         

                    
        </div>
    </div>
</div>