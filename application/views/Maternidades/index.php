<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Register Composer
            </h3>
            <form action="<?php echo  site_url('Maternidades/guardar'); ?>" id="frm_registrar_maternidad" method="post">
                <label for=""><b>NAME:</b></label>
                <input type="text" name="nombre_mat" id="nombre_mat"
                placeholder="Ingrese el nombre de la maternidad" class="form-control"><br>
                <label for=""><b>BIOGRAPHY:</b></label>
                <input type="text" name="provincia_mat" id="provincia_mat"
                placeholder="Ingrese el nombre de la provincia" class="form-control"><br>
                <label for=""><b>CITY:</b></label>
                <input type="text" name="ciudad_mat" id="ciudad_mat"
                placeholder="Ingrese la ciudad" class="form-control"><br>
                

               
                <br>
                <button class="btn btn-success" type="submit">SAVE</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="reset">CANCEL</button>
            </form>
        </div>
        <div class="col-md-8">
            <h3  class="text-center">List of Composers
            </h3>
            <br>
            <!--Boton ver direcciones-->
            
            <br> <br>
            <?php if($maternidades): ?>
            <table class="table table-bordered table-striped table-hover" id ="tbl-clinicas">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">BIOGRAPHY:</th>
                        <th class="text-center">CITY</th>
                        <th class="text-center">ACCIONES</th>
                
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($maternidades as $maternidadTemporal): ?>
                        <tr>
                            <td class="text-center"><?php echo $maternidadTemporal->id_mat; ?></td>
                            <td class="text-center"><?php echo $maternidadTemporal->nombre_mat; ?></td>
                            <td class="text-center"><?php echo $maternidadTemporal->provincia_mat; ?></td>
                            <td class="text-center"><?php echo $maternidadTemporal->ciudad_mat; ?></td>
                            <td class="text-center">
                            
                                <a href="#" class="btn btn-warning">Editar</a>
                                <a href="<?php echo site_url('Maternidades/eliminar'); ?>/<?php echo $maternidadTemporal->id_mat; ?>" class="btn btn-danger" onclick="return confirm('Esta seguro?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>

    
                    <?php //print_r($clientes); ?>
                <?php else: ?>                    
                    <h3 style="color:red;">
                        No existen maternidades regitradas
                    </h3>
                <?php endif; ?>
        </div>
    </div>
</div>

<br><br>

