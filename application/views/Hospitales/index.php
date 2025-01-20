<br>
<div class="container">
<div class="row">
        <br>
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Register Users    </h3>
            <form action="<?php echo  site_url('Hospitales/guardar'); ?>" id="frm_registrar_hospital" method="post">
                <label for=""><b>NAME:</b></label>
                <input type="text" name="nombre_hos" id="nombre_hos"
                placeholder="Please enter name" class="form-control"><br>
                <label for=""><b>EMAIL:</b></label>
                <input type="text" name="provincia_hos" id="provincia_hos"
                placeholder="Enter your phone" class="form-control"><br>
                <label for=""><b>PHONE:</b></label>
                <input type="text" name="ciudad_hos" id="ciudad_hos"
                placeholder="Ingrese la ciudad" class="form-control"><br>
                
                

                
                <br>
                <button class="btn btn-success" type="submit">SAVE</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="reset">CANCELL</button>
            </form>
        </div>
        <div class="col-md-8">
            <h3  class="text-center">User List</h3>
            <br>
           
            <br> <br>
            <?php if($hospitales): ?>
            <table class="table table-bordered table-striped table-hover" id ="tbl-hospitales">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">EMAIL</th>
                        <th class="text-center">PHONE</th>
                        <th class="text-center">ACCION</th>
                
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hospitales as $hospitalTemporal): ?>
                        <tr>
                            <td class="text-center"><?php echo $hospitalTemporal->id_hos; ?></td>
                            <td class="text-center"><?php echo $hospitalTemporal->nombre_hos; ?></td>
                            <td class="text-center"><?php echo $hospitalTemporal->provincia_hos; ?></td>
                            <td class="text-center"><?php echo $hospitalTemporal->ciudad_hos; ?></td>
                            <td class="text-center">
                           
                                <a href="#" class="btn btn-warning">Editar</a>
                                <a href="<?php echo site_url('Hospitales/eliminar'); ?>/<?php echo $hospitalTemporal->id_hos; ?>" class="btn btn-danger" onclick="return confirm('Esta seguro?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>

    
                    <?php //print_r($clientes); ?>
                <?php else: ?>                    
                    <h3 style="color:red;">
                        No existen hospitales regitrados
                    </h3>
                <?php endif; ?>
        </div>
    </div>
</div>

<br><br>



<script>
    function initMap(){
        var coordenadaCentral=new google.maps.LatLng(-0.9259499759478279, -78.60653701639934);
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
            icon: '<?php echo base_url("assets/img/hospital.png"); ?>'
            
        });

        google.maps.event.addListener(
            marcardor,
            'dragend',
            function(event){
                var latitud = this.getPosition().lat();
                var longitud = this.getPosition().lng();
                //alert(latitud + "---- " + longitud)//Prueba
                document.getElementById('latitud_hos').value=latitud;
                document.getElementById('longitud_hos').value=longitud;

            }
        );

        <?php if ($hospitales): ?>
            <?php foreach ($hospitales as $hospital): ?>
                var latLng = {lat: parseFloat("<?php echo $hospital->latitud_hos; ?>"), lng: parseFloat("<?php echo $hospital->longitud_hos; ?>")};
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: mapa,
                    title: '<?php echo $hospital->nombre_hos; ?>'
                });
            <?php endforeach; ?>
        <?php endif; ?>

    }
</script>

