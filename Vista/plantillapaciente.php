
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
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#">AREA DEL PACIENTE<span class="visually-hidden">(current)</span></a>
               
                <a class="nav-item nav-link" href="Vista/inicio.php">Salir</a>               
                <a class="nav-item nav-link" href="">Citas/Médicas</a>                            
                <a class="nav-item nav-link" href=""></a>
                <a class="nav-item nav-link" href=""></a> 
                <!--<a class="nav-item nav-link" href="?controlador=especialidad&accion=crear">Registrar/Especialidad</a>--> 
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

     
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>