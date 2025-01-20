<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Direcciones Generales de Clinicas</h3>
            <br>
            <?php if ($clinicas): ?>
            <table class="table table-bordered table-striped table-hover" id="tbl-direcciones-generales">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">PROVINCIA</th>
                        <th class="text-center">CIUDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clinicas as $clinicaTemporal): ?>
                    <tr>
                        <td class="text-center"><?php echo $clinicaTemporal->id_cli; ?></td>
                        <td class="text-center"><?php echo $clinicaTemporal->nombre_cli; ?></td>
                        <td class="text-center"><?php echo $clinicaTemporal->provincia_cli; ?></td>
                        <td class="text-center"><?php echo $clinicaTemporal->ciudad_cli; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
            <h3 style="color:red;">No existen clinicas registrados</h3>
            <?php endif; ?>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Mapa de Direcciones Generales</h3>
            <div id="mapa-direcciones-generales" style="border: 1px solid black; width:100%;height:400px"></div>
        </div>
    </div>
</div>

<script>
    
    function initMap() {
        var coordenadaCentral = new google.maps.LatLng(-0.9178980695302612, -78.63296437278657);
        var mapa = new google.maps.Map(
            document.getElementById('mapa-direcciones-generales'),
            {
                center: coordenadaCentral,
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );

        <?php foreach ($clinicas as $clinicaTemporal): ?>
        var marcador = new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $clinicaTemporal->latitud_cli; ?>, <?php echo $clinicaTemporal->longitud_cli; ?>),
            map: mapa,
            title: '<?php echo $clinicaTemporal->nombre_cli; ?>',
        });
        <?php endforeach; ?>
    }
</script>

