<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Registrar Doctores</h3>
            <form action="<?php echo  site_url('Doctores/guardar'); ?>" id="frm_registrar_doctor" method="post">

                <label for=""><b>Especialidad:</b></label>
                <select name="especialidad_doc_ca" id="especialidad_doc_ca" class="form-control" required>
                    <option value="">--SELECCIONE--</option>
                    <option value="GENERAL">GENERAL</option>
                    <option value="ODONTOLOGIA">ODONTOLOGIA</option>
                    <option value="PEDIATRA">PEDIATRA</option>
                </select>

                
                <label for=""><b>DNI:</b></label>
                <input type="number" name="dni_doc_ca" id="dni_doc_ca"
                placeholder="Ingrese su DNI" class="form-control"><br>
                <label for=""><b>APELLIDO:</b></label>
                <input type="text" name="apellido_doc_ca" id="apellido_doc_ca"
                placeholder="Ingrese su primer apellido" class="form-control"><br>
                <label for=""><b>NOMBRE:</b></label>
                <input type="text" name="nombre_doc_ca" id="nombre_doc_ca"
                placeholder="Ingrese su primer nombre" class="form-control"><br>

                <input type="text" name="latitud_doc_ca" id="latitud_doc_ca"
                placeholder="Seleccione la ubicación en el mapa" class="form-control" readonly><br>
                <input type="text" name="longitud_doc_ca" id="longitud_doc_ca"
                placeholder="Seleccione la ubicación en el mapa" class="form-control" readonly><br>
                <div id="mapa-direccion" style="border: 1px solid black; width:100%;height:250px"></div>
                <br>
                <button class="btn btn-success" type="submit">GUARDAR</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="reset">CANCELAR</button>
            </form>
        </div>
        <div class="col-md-8">
            <h3  class="text-center">Listado de Doctores</h3>
            <br>
            <!--Boton ver direcciones-->
            <div class="col-md-4">
            <a href="<?php echo site_url('Doctores/verDireccionesGenerales'); ?>" class="btn btn-primary float-right">Ver Direcciones Generales</a>
            </div>
            <?php if($doctores): ?>
            <table class="table table-bordered table-striped table-hover" id ="tbl-doctores">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">ESPECIALIDAD</th>
                        <th class="text-center">DNI</th>
                        <th class="text-center">APELLIDO</th>
                        <th class="text-center">NOMBRE</th>
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
                            <a href="<?php echo site_url('Doctores/graficarDireccion'); ?>/<?php echo $doctorTemporal->id_doc_ca; ?>" class="btn btn-primary" target="_blank">Ver Dirección</a>
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

<script>
    function initMap(){
        var coordenadaCentral=new google.maps.LatLng(-0.15949984853868873, -78.492520003779);
        var mapa1= new google.maps.Map(
            document.getElementById('mapa-direccion'),
            {
                center: coordenadaCentral,
                zoom: 10,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            }
        );

        var marcardor=new google.maps.Marker({
            position:coordenadaCentral,
            map:mapa1,
            tittle:'Seleccione la dirección',
            draggable:true
        });

        google.maps.event.addListener(
            marcardor,
            'dragend',
            function(event){
                var latitud = this.getPosition().lat();
                var longitud = this.getPosition().lng();
                //alert(latitud + "---- " + longitud)//Prueba
                document.getElementById('latitud_doc_ca').value=latitud;
                document.getElementById('longitud_doc_ca').value=longitud;

            }
        );

    }
</script>