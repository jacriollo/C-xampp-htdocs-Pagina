

<!doctype html>
<html lang="en">
  <head>
    
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  </head>
  <body>

       <!-- <nav class="navbar navbar-toggeleable-md navbar-inverse bg-info">
            <div  class="nav navbar-nav mx-auto">
            <h1  class="text-white" class="display-6">ÁREA MÉDICA</h1>              
            </div>
        </nav>

        <nav class="navbar navbar-expand navbar-light bg-light">
            <div  class="nav navbar-nav mr-auto">
                <h1 class="display-6">Bienvenido:    </h1>               
            </div>
        </nav> -->
        <?php session_start();  //echo $_SESSION['nom_per'];?><?php // echo "     ";?><?php // echo $_SESSION['ape_per'];?>
        <nav class="navbar navbar-expand navbar-light bg-light">        
            <div class="nav navbar-nav ml-auto">               
            <a class="nav-item nav-link active" href="#">AREA MÉDICA<span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="Vista/inicio.php">Salir</a> 
                <a class="nav-item nav-link" href="?controlador=usuarios&accion=editar1&id_per=<?php echo $_SESSION['id_per']?> ">Modificar/Médicos</a> 
                <a class="nav-item nav-link" href="#">Citas</a>             
                <a class="nav-item nav-link" href="?controlador=examenes&accion=inicio">Examenes</a>                            
                <a class="nav-item nav-link" href="?controlador=receta&accion=inicio">Receta/Médica</a>
                <a class="nav-item nav-link" href=""></a> 
                <!--<a class="nav-item nav-link" href="?controlador=especialidad&accion=crear">Registrar/Especialidad</a>
                ?controlador=usuarios&accion=inicio--> 
                <a class="nav-item nav-link" href=""></a>
            </div>
        </nav>


      <div class="container">
          <div class="row">        
         
              <div class="col-xs|sm|md|lg|xl-1-12">
                  
                  <?php include_once("ruteador.php");?>
    
              </div>
              
          </div>
      </div>

      </div>