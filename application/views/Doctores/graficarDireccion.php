<br>
<h3>
    <b>DIRECCION DE LOS DOCTORES</b>
</h3>
<table class="table table-bordered table-striped">
    <tr>
        <th>ESPECIALIDAD:</th>
        <td><?php echo $doctor->especialidad_doc_ca; ?></td>      
        <th>DNI:</th>
        <td><?php echo $doctor->dni_doc_ca; ?></td>        
        <th>NOMBRE:</th>
        <td><?php echo $doctor->nombre_doc_ca; ?></td>
        <th>APELLIDO:</th>
        <td><?php echo $doctor->apellido_doc_ca; ?></td>
    </tr>
    <tr>
        <th>LATITUD:</th>
        <td><?php echo $doctor->latitud_doc_ca; ?></td>
        <th>LONGITUD:</th>
        <td><?php echo $doctor->longitud_doc_ca; ?></td>
    </tr>
</table>
<br>
<div id="mapa-direccion" style="border:1px solid black; height:450px; width:100%;"></div>


<script>

    function initMap(){
        var coordenadaCentral=new google.maps.LatLng(<?php echo $doctor->latitud_doc_ca; ?>,<?php echo $doctor->longitud_doc_ca; ?>);
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
            title:'<?php echo $doctor->nombre_doc_ca; ?> <?php echo $doctor->apellido_doc_ca; ?>',
            draggable:false
        });

    }//Cierre de la funcion

</script>