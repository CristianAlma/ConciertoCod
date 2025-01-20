<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Direcciones Generales de los Doctores</h3>
            <br>
            <?php if ($doctores): ?>
            <table class="table table-bordered table-striped table-hover" id="tbl-direcciones-generales">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">ESPECIALIDAD</th>
                        
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doctores as $doctorTemporal): ?>
                    <tr>
                        <td class="text-center"><?php echo $doctorTemporal->id_doc_ca; ?></td>
                        <td class="text-center"><?php echo $doctorTemporal->especialidad_doc_ca; ?></td>
                        <td class="text-center"><?php echo $doctorTemporal->dni_doc_ca; ?></td>
                        <td class="text-center"><?php echo $doctorTemporal->apellido_doc_ca; ?></td>
                        <td class="text-center"><?php echo $doctorTemporal->nombre_doc_ca; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
            <h3 style="color:red;">No existen doctores registrados</h3>
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

