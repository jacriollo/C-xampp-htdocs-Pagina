<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog super genial</title>
    <meta name="description" content="Curso de Bootstrap Gratis">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ignacio Gutiérrez">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilos/css/bootstrap.css">
    <!-- Estilos en Css -->
    <style>
      .slider{
        background: url("estilos/images/bg-3.png");
        background-size: cover;
        background-position: center; 
        height: 450px;
      }
    </style>   
  </head>
  <body>
  <div class="container-fluid bg-inverse fixed-top">
      <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">            
                    Hospital Básico de la Zona El Oro 
          </a>         
      </nav>
  </div>
<!-- Menú de navegación -->
    <div class="container-fluid bg-inverse fixed-top">
      <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse container">    
        <a class="nav-item nav-link active" href="inicio.php">Inicio</a>
        <a class="nav-item nav-link active" href="?controlador=medicos&accion=crear">Registrar/Medicos</a>
        <a class="nav-item nav-link active" href="?controlador=medicos&accion=inicio">Editar/Eliminar</a>
        <a class="nav-item nav-link active" href="?controlador=paginas&accion=inicio">Registrar/Especialidad</a>
        <a class="nav-item nav-link active" href="?controlador=paginas&accion=inicio">Editar/Eliminar</a>
        <a class="nav-item nav-link active" href="?controlador=paginas&accion=inicio">Registrar/Medico/Especialidad</a>
      </nav>
    </div>

    
    <!-- Fin Menú de navegación -->
    <!-- Sección Slider -->
    <div class="container-fluid slider text-white d-flex flex-column justify-content-center align-items-center">       
      <div align="center"> </div>  
      <?php include_once("ruteador.php");?>   
    </div>       

  
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>