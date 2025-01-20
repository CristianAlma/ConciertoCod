<h1 class="text-center">LISTADO GENERAL</h1>
<div class="row">
        <div class="col-md-4">
            <?php if ($clinicas): ?>
                <table class="table table-bordered table-striped table-hover" id="tbl-clinicas">
                    <thead>
                        <tr>
                            <th class="text-center">ID_CLINICA</th>
                            <th class="text-center">NOMBRE_CLINICA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clinicas as $clinicaTemporal): ?>
                            <tr>
                                <td class="text-center"><?php echo $clinicaTemporal->id_cli; ?></td>
                                <td class="text-center"><?php echo $clinicaTemporal->nombre_cli; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if ($hospitales): ?>
                <table class="table table-bordered table-striped table-hover" id="tbl-hospitales">
                    <thead>
                        <tr>
                            <th class="text-center">ID_HOSPITAL</th>
                            <th class="text-center">NOMBRE_HOSPITAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hospitales as $hospitalTemporal): ?>
                            <tr>
                                <td class="text-center"><?php echo $hospitalTemporal->id_hos; ?></td>
                                <td class="text-center"><?php echo $hospitalTemporal->nombre_hos; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>                        
        </div>
        <div class="col-md-4">
        <?php if ($maternidades): ?>
            <table class="table table-bordered table-striped table-hover" id="tbl-maternidades">
                <thead>
                    <tr>
                        <th class="text-center">ID_MATERNIDAD</th>
                        <th class="text-center">NOMBRE_MATERNIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($maternidades as $maternidadTemporal): ?>
                        <tr>
                            <td class="text-center"><?php echo $maternidadTemporal->id_mat; ?></td>
                            <td class="text-center"><?php echo $maternidadTemporal->nombre_mat; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        </div>
        <div class="col-md-4">
        <?php if ($doctores): ?>
            <table class="table table-bordered table-striped table-hover" id="tbl-maternidades">
                <thead>
                    <tr>
                        <th class="text-center">ID_DOCTOR</th>
                        <th class="text-center">NOMBRE_DOCTOR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doctores as $doctorTemporal): ?>
                        <tr>
                            <td class="text-center"><?php echo $doctorTemporal->id_doc_ca; ?></td>
                            <td class="text-center"><?php echo $doctorTemporal->nombre_doc_ca; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        </div>
    </div>

<br>
	<div class="row ">
		<h2 class="text-center">GLOBAL</h2>
	</div>
    <br>
<br>
	<div class="row">
		<div style="border:1px solid black; height:400px; width: 100%;" id="mapa-Global"></div>

	</div>


<script>
	function initMap(){
		var coordenadaInicial = new google.maps.LatLng(-0.959171039162458, -78.63403494077617);

		var mapa1 = new google.maps.Map(
			document.getElementById('mapa-Global'),{
				center:coordenadaInicial,
				zoom:12,
				mapTypeId:google.maps.MapTypeId.ROADMAP
                
			}

		);
		// Agrega los marcadores
		<?php foreach ($clinicas as $clinicaTemporal): ?>
                var marcadorClinicas = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $clinicaTemporal->latitud_cli; ?>, <?php echo $clinicaTemporal->longitud_cli; ?>),
					title: '<?php echo $clinicaTemporal->id_cli?>,<?php echo $clinicaTemporal->nombre_cli?>',
                    map: mapa1
                });
        <?php endforeach; ?>
		//hospitales
        <?php foreach ($hospitales as $hospitalTemporal): ?>
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $hospitalTemporal->latitud_hos; ?>, <?php echo $hospitalTemporal->longitud_hos; ?>),
					title: '<?php echo $hospitalTemporal->id_hos?>,<?php echo $hospitalTemporal->nombre_hos?>',
                    map: mapa1,
                     icon: '<?php echo base_url("assets/img/hospital.png"); ?>'

                    
                });
        <?php endforeach; ?>
		//maternidades
        <?php foreach ($maternidades as $maternidadTemporal): ?>
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $maternidadTemporal->latitud_mat; ?>, <?php echo $maternidadTemporal->longitud_mat; ?>),
                    title: '<?php echo $maternidadTemporal->id_mat?>,<?php echo $maternidadTemporal->nombre_mat?>',
					map: mapa1
                });
        <?php endforeach; ?>

        //dcotores
        <?php foreach ($doctores as $doctorTemporal): ?>
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $doctorTemporal->latitud_doc_ca; ?>, <?php echo $doctorTemporal->longitud_doc_ca; ?>),
                    title: '<?php echo $doctorTemporal->id_doc_ca?>,<?php echo $doctorTemporal->nombre_doc_ca?>',
					map: mapa1
                });
        <?php endforeach; ?>
	}
</script>