<br>
<h3>
    <b>DIRECCION DE LAS MATERNIDADES</b>
</h3>
<table class="table table-bordered table-striped">
    <tr>
        <th>NOMBRE:</th>
        <td><?php echo $maternidad->nombre_mat; ?></td>        
        <th>PROVINCIA:</th>
        <td><?php echo $maternidad->provincia_mat; ?></td>
        <th>CIUDAD:</th>
        <td><?php echo $maternidad->ciudad_mat; ?></td>
    </tr>
    <tr>
        <th>LATITUD:</th>
        <td><?php echo $maternidad->latitud_mat; ?></td>
        <th>LONGITUD:</th>
        <td><?php echo $maternidad->longitud_mat; ?></td>
    </tr>
</table>
<br>
<div id="mapa-direccion" style="border:1px solid black; height:450px; width:100%;"></div>


<script>

    function initMap(){
        var coordenadaCentral=new google.maps.LatLng(<?php echo $maternidad->latitud_mat; ?>,<?php echo $maternidad->longitud_mat; ?>);
        var mapa1=new google.maps.Map(
            document.getElementById('mapa-direccion'),
            {
                center:coordenadaCentral,
                zoom:10,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            }
        );
        
        var marcador=new google.maps.Marker({
            position:coordenadaCentral,
            map:mapa1,
            title:'<?php echo $maternidad->nombre_mat; ?> <?php echo $maternidad->provincia_mat; ?>',
            draggable:false
        });

    }//Cierre de la funcion

</script>