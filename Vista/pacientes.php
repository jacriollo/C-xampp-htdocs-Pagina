
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
  </head>
  <body>
  <?php
    //include_once("Modelo/pacientes.php");
    //include_once("conexion.php");
    //BD::crearInstancia();
  ?>
<div class="card">
    <div align="center" class="card-header">
        REGISTRAR PACIENTES
    </div>
    <div class="card-body">
        <form  method="post" action="pacientes_adm.php">

    <div class="mb-3" align="center">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="num"
      class="form-control" name="cedula" id="cedula" style="width:300px" aria-describedby="helpId" placeholder="Cédula del paciente">
    </div>    

    <div class="mb-3" align="center">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" name="apellido" id="apellido" style="width:300px" aria-describedby="helpId" placeholder="Apellido del paciente">  
    </div>

    <div class="mb-3" align="center">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" name="nombre" id="nombre" style="width:300px" aria-describedby="helpId" placeholder="Nombre del paciente">  
    </div>

    <div class="mb-3" align="center">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" class="form-control" name="correo" id="correo" style="width:300px" aria-describedby="emailHelpId" placeholder="Correo del paciente">      
    </div>

    <div class="mb-3" align="center">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" name="telefono" id="telefono" style="width:300px" aria-describedby="helpId" placeholder="Teléfono del paciente">  
    </div>

    <div class="mb-3" align="center">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" name="direccion" id="direccion" style="width:300px" aria-describedby="helpId" placeholder="Dirección del paciente">  
    </div>

    <div class="mb-3" align="center">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" name="ciudad" id="ciudad" style="width:300px" aria-describedby="helpId" placeholder="Ciudad de recidencia del paciente">  
    </div>

    <div class="mb-3" align="center">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="text"
      class="form-control" name="fecha" id="fecha" style="width:300px" aria-describedby="helpId" placeholder="Fecha de nacimiento del paciente">  
      </div>

    <div class="form-group" align="center">
          <label for="genero">Género</label>
          <select name="genero" id="genero" class="custom-select"  style="width:300px" >
              <option value ="1">Masculino</option>
              <option value ="2">Femenino</option>                                                        
          </select>
    </div>

    <div class="form-group" align="center">
          <label for="estper">Estado de persona</label>
          <select name="estper" id="estper" class="custom-select"  style="width:300px" >
              <option value ="1">Activado</option>
              <option value ="2">Desactivado</option>                                                        
          </select>
    </div>
    

    <div align="center" class="card-header">
    <input  name="" id="" class="btn btn-success" type="submit" value="Agregar Usuarios"  >
    <input action="index.php" name="btn" id="btn" class="btn btn-success" type="submit" value="Regresar"  >
    </div>
    

      
     
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>