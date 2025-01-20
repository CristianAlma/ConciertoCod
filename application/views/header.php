<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG 2</title>
    <!--Importando API de goolgle Maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpMUN8WAoNM9mqqdQ0m-CgBIVFcRJTSmw&libraries=places&callback=initMap" ></script>
    <!--Importanto Boostrap el diseño css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Importando Bosostrap JS o JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body>
    <!--Colocar boostrap del segundo link-->
    <!--navbar-dark ----bg-dark----- es para dar color-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6f4f1f;"> 

         <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">CONCERT SYSTEM
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/Hospitales/index">Users</a>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/Clinicas/index">Concert</a>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/Maternidades/index">Composer</a>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/Doctores/index">Repertoire</a>
               
            </ul>
            </div>
        </div>
        </nav>
   

