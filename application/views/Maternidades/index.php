<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Registrar Maternidades</h3>
            <form action="<?php echo  site_url('Maternidades/guardar'); ?>" id="frm_registrar_maternidad" method="post">
                <label for=""><b>NOMBRE:</b></label>
                <input type="text" name="nombre_mat" id="nombre_mat"
                placeholder="Ingrese el nombre de la maternidad" class="form-control"><br>
                <label for=""><b>PROVINCIA:</b></label>
                <input type="text" name="provincia_mat" id="provincia_mat"
                placeholder="Ingrese el nombre de la provincia" class="form-control"><br>
                <label for=""><b>CIUDAD:</b></label>
                <input type="text" name="ciudad_mat" id="ciudad_mat"
                placeholder="Ingrese la ciudad" class="form-control"><br>
                <label for=""><b>DIRECCIÓN:</b></label>
                <input type="text" name="direccion_mat" id="direccion_mat"
                placeholder="Ingrese la direccion" class="form-control"><br>
                

                <input type="text" name="latitud_mat" id="latitud_mat"
                placeholder="Seleccione la ubicación en el mapa" class="form-control" readonly><br>
                <input type="text" name="longitud_mat" id="longitud_mat"
                placeholder="Seleccione la ubicación en el mapa" class="form-control" readonly><br>
                <div id="mapa-direccion" style="border: 1px solid black; width:100%;height:250px"></div>
                <br>
                <button class="btn btn-success" type="submit">GUARDAR</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="reset">CANCELAR</button>
            </form>
        </div>
        <div class="col-md-8">
            <h3  class="text-center">Listado de Maternidades</h3>
            <br>
            <!--Boton ver direcciones-->
            <div class="col-md-4">
            <a href="<?php echo site_url('Maternidades/verDireccionesGenerales'); ?>" class="btn btn-primary float-right">Ver Direcciones Generales</a>
            </div>
            <br> <br>
            <?php if($maternidades): ?>
            <table class="table table-bordered table-striped table-hover" id ="tbl-clinicas">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">PROVINCIA</th>
                        <th class="text-center">CIUDAD</th>
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
                            <a href="<?php echo site_url('Maternidades/graficarDireccion'); ?>/<?php echo $maternidadTemporal->id_mat; ?>" class="btn btn-primary" target="_blank">Ver Dirección</a>
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

<script>
    function initMap(){
        var coordenadaCentral=new google.maps.LatLng(-2.197933792944073, -79.88841023449181);
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
            draggable:true,
            icon: '<?php echo base_url("assets/img/mater.png"); ?>'
        });

        google.maps.event.addListener(
            marcardor,
            'dragend',
            function(event){
                var latitud = this.getPosition().lat();
                var longitud = this.getPosition().lng();
                //alert(latitud + "---- " + longitud)//Prueba
                document.getElementById('latitud_mat').value=latitud;
                document.getElementById('longitud_mat').value=longitud;

            }
        );

    }
</script>