
<div class="card">
    <div align="center" class="card-header">
        REGISTRAR PACIENTES
    </div>
    <div class="card-body">
        <form action="" method="post">

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
    <input  name="" id="" class="btn btn-success" type="submit" value="Agregar Usuarios">
    </div>
    
