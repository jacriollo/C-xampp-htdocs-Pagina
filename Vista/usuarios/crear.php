
<div class="card">
    <div align="center" class="card-header">
        AGREGAR USUARIOS
    </div>
    <div class="card-body">
        <form action="" method="post">

    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="text"
      class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Cédula del usuario">  
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del usuario">  
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del usuario">  
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del usuario">      
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Teléfono del usuario">  
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Dirección del usuario">  
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" name="ciudad" id="ciudad" aria-describedby="helpId" placeholder="Ciudad de recidencia del usuario">  
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="text"
      class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha de nacimiento del usuario">  
    </div>

    <div class="form-group">
          <label for="genero">Género</label>
          <select name="genero" id="genero" class="custom-select">
              <option value ="1">Masculino</option>
              <option value ="2">Femenino</option>                                                        
          </select>
    </div>

    <div class="form-group">
          <label for="rol">Rol</label>
          <select name="rol" id="rol" class="custom-select">
              <option value ="1">Administrador</option>
              <option value ="2">Médico</option>
              <option value ="3">Secretaria</option>  
              <option value ="4">Paciente</option>
                                                      
          </select>
    </div>

    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
              <option value ="1">Activado</option>
              <option value ="2">Desactivado</option>                                         
          </select>
      </div>
  

    <!--<div class="mb-3">
      <label for="pas" class="form-label">contraseña:</label>
      <input type="text"
      class="form-control" name="pas" id="pas" aria-describedby="helpId" placeholder="Contraseña">  
    </div>-->

    <div align="center" class="card-header">
    <input  name="" id="" class="btn btn-success" type="submit" value="Agregar Usuarios">
    </div>
    

        </form>
    </div>
    
</div>