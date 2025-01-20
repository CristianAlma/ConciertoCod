<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Direcciones Generales de Hospitales</h3>
            <br>
            <?php if ($hospitales): ?>
            <table class="table table-bordered table-striped table-hover" id="tbl-direcciones-generales">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">EMAIL</th>
                        <th class="text-center">CIUDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hospitales as $hospitalTemporal): ?>
                    <tr>
                        <td class="text-center"><?php echo $hospitalTemporal->id_hos; ?></td>
                        <td class="text-center"><?php echo $hospitalTemporal->nombre_hos; ?></td>
                        <td class="text-center"><?php echo $hospitalTemporal->provincia_hos; ?></td>
                        <td class="text-center"><?php echo $hospitalTemporal->ciudad_hos; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
            <h3 style="color:red;">No existen hospitales registrados</h3>
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



