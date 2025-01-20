<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Register Concerts</h3>
            <form action="<?php echo  site_url('Clinicas/guardar'); ?>" id="frm_registrar_clinica" method="post">
                <label for=""><b>NAME:</b></label>
                <input type="text" name="nombre_cli" id="nombre_cli"
                placeholder="Enter the name of the concert" class="form-control"><br>
                <label for=""><b>INFORMATION:</b></label>
                <input type="text" name="provincia_cli" id="provincia_cli"
                placeholder="Enter the name of the information" class="form-control"><br>
                <label for=""><b>LOCATION:</b></label>
                <input type="text" name="ciudad_cli" id="ciudad_cli"
                placeholder="Enter the location" class="form-control"><br>
                
                

                
                <br>
                <button class="btn btn-success" type="submit">SAVE</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="reset">CANCELL</button>
            </form>
        </div>
        <div class="col-md-8">
            <h3  class="text-center">Concert List     </h3>
            <br>
            <!--Boton ver direcciones-->
            
            <?php if($clinicas): ?>
            <table class="table table-bordered table-striped table-hover" id ="tbl-clinicas">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">INFORMATION</th>
                        <th class="text-center">LOCATION</th>
                        <th class="text-center">ACCIONES</th>
                
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clinicas as $clinicaTemporal): ?>
                        <tr>
                            <td class="text-center"><?php echo $clinicaTemporal->id_cli; ?></td>
                            <td class="text-center"><?php echo $clinicaTemporal->nombre_cli; ?></td>
                            <td class="text-center"><?php echo $clinicaTemporal->provincia_cli; ?></td>
                            <td class="text-center"><?php echo $clinicaTemporal->ciudad_cli; ?></td>
                            <td class="text-center">
                            
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="<?php echo site_url('Clinicas/eliminar'); ?>/<?php echo $clinicaTemporal->id_cli; ?>" class="btn btn-danger" onclick="return confirm('Esta seguro?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>

    
                    <?php //print_r($clientes); ?>
                <?php else: ?>                    
                    <h3 style="color:red;">
                    There are no registered concerts

                    </h3>
                <?php endif; ?>
        </div>
    </div>
</div>

<br><br>

