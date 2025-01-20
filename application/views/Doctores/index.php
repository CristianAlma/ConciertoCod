<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Register Repertoires
            </h3>
            <form action="<?php echo  site_url('Doctores/guardar'); ?>" id="frm_registrar_doctor" method="post">

                <label for=""><b>CONCERT:</b></label>
                <select name="especialidad_doc_ca" id="especialidad_doc_ca" class="form-control" required>
                    <option value="">--SELECT--</option>
                    <option value="GENERAL">Cristian Fernando Almache Lema</option>
                    <option value="ODONTOLOGIA">BONILLA</option>
                    <option value="PEDIATRA">LUCAS</option>
                </select>

                
                <label for=""><b>NUMBER:</b></label>
                <input type="number" name="dni_doc_ca" id="dni_doc_ca"
                placeholder="Enter your number" class="form-control"><br>
                <label for=""><b>WORK NAME:</b></label>
                <input type="text" name="apellido_doc_ca" id="apellido_doc_ca"
                placeholder="Enter work name" class="form-control"><br>
                <label for=""><b>LOCATION:</b></label>
                <input type="text" name="nombre_doc_ca" id="nombre_doc_ca"
                placeholder="Enter the location" class="form-control"><br>

                
                <br>
                <button class="btn btn-success" type="submit">SAVE</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="reset">CANCELL</button>
            </form>
        </div>
        <div class="col-md-8">
            <h3  class="text-center">List of Repertoires
            </h3>
            <br>
            <!--Boton ver direcciones-->
            <div class="col-md-4">
     
            </div>
            <?php if($doctores): ?>
            <table class="table table-bordered table-striped table-hover" id ="tbl-doctores">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">CONCERT</th>
                        <th class="text-center">PHONE</th>
                        <th class="text-center">WORK NAME</th>
                        <th class="text-center">LOCATION</th>
                        <th class="text-center">ACCIONES</th>
                
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($doctores as $doctorTemporal): ?>
                        <tr>
                            <td class="text-center"><?php echo $doctorTemporal->id_doc_ca; ?></td>
                            <td class="text-center"><?php echo $doctorTemporal->especialidad_doc_ca; ?></td>
                            <td class="text-center"><?php echo $doctorTemporal->dni_doc_ca; ?></td>
                            <td class="text-center"><?php echo $doctorTemporal->apellido_doc_ca; ?></td>
                            <td class="text-center"><?php echo $doctorTemporal->nombre_doc_ca; ?></td>
                            <td class="text-center">
                            
                                <a href="#" class="btn btn-warning">Editar</a>
                                <a href="<?php echo site_url('Doctores/eliminar'); ?>/<?php echo $doctorTemporal->id_doc_ca; ?>" class="btn btn-danger" onclick="return confirm('Esta seguro?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>

    
                    <?php //print_r($clientes); ?>
                <?php else: ?>                    
                    <h3 style="color:red;">
                        No existen doctores regitrados
                    </h3>
                <?php endif; ?>
        </div>
    </div>
</div>

<br><br>

