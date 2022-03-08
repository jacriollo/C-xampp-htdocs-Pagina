<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  
    <!--libreria jquery-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- js para personalizar -->
    <script src="js/app.js"></script>
    <!--bootstrap css CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--css Date Picker-->
    <link rel="stylesheet" href="libs/css/bootstrap-datepicker.standalone.css">
   
    </head>
  <body>


<!--<nav class="navbar navbar-toggeleable-md navbar-inverse bg-info">
            <div  class="nav navbar-nav mx-auto">
            <h1  class="text-white" class="display-6">SECRETARIA</h1>              
            </div>
        </nav>

        <nav class="navbar navbar-expand navbar-light bg-light">
            <div  class="nav navbar-nav mr-auto">
                <h1 class="display-6">Bienvenid@:    <?php session_start(); //echo $_SESSION['nom_per'];?><?php //echo "     ";?><?php //echo $_SESSION['ape_per'];?></h1>               
            </div>
        </nav>-->


        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">   
            <a class="nav-item nav-link active" href="#">AREA SECRETARIA<span class="visually-hidden">(current)</span></a>             
                <a class="nav-item nav-link" href="Vista/inicio.php">Salir</a>
                <!--<a class="nav-item nav-link" href=""></a>-->
                <a class="nav-item nav-link" href="?controlador=secretaria&accion=inicio">Pacientes</a>               
                <a class="nav-item nav-link" href="#">Citas Médicas</a>                 
                <!--<a class="nav-item nav-link" href="?controlador=registrarE&accion=inicio">Registrar/Medico/Especialidad</a>
                <a class="nav-item nav-link" href="?controlador=horarios&accion=inicio">Horarios</a>
                <a class="nav-item nav-link" href="?controlador=catalogoM&accion=inicio">Catalogo/Medicinas</a>
                <a class="nav-item nav-link" href="?controlador=examenes&accion=inicio">Exámenes</a>-->
            </div>
        </nav>
        <div class="container">
          <div class="row">        
         
              <div class="col-xs|sm|md|lg|xl-1-12">
                  
                  <?php
                     //session_start();
                     include_once("ruteador.php");
                  ?>
    
              </div>
              
          </div>
      </div>

     
    <!-- Bootstrap JavaScript Libraries -->
    <!--bootstrap js CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--Obligatorio que la libreria datepicker este en el footer justo despues de los js de bootstrap para no causar conflicto-->
    <script src="libs/js/bootstrap-datepicker.min.js"></script>
    <script src="libs/locales/bootstrap-datepicker.es.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  


</body>
</html>