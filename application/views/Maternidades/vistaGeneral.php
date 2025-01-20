<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Direcciones Generales de Maternidades</h3>
            <br>
            <?php if ($maternidades): ?>
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
                    <?php foreach ($maternidades as $maternidadTemporal): ?>
                    <tr>
                        <td class="text-center"><?php echo $maternidadTemporal->id_mat; ?></td>
                        <td class="text-center"><?php echo $maternidadTemporal->nombre_mat; ?></td>
                        <td class="text-center"><?php echo $maternidadTemporal->provincia_mat; ?></td>
                        <td class="text-center"><?php echo $maternidadTemporal->ciudad_mat; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
            <h3 style="color:red;">No existen maternidades registradas</h3>
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



