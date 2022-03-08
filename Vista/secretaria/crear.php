      

<div  style="width:600px" class="card">
    <div align="center"  class="card-header">
        AGREGAR PACIENTES
    </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate action=""  method="post">

    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="text"
      class="form-control" name="cedula" id="cedula" style="width:400px" aria-describedby="helpId" placeholder="Cédula del usuario" Required>  
     <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>     
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" name="apellido" id="apellido" style="width:400px" aria-describedby="helpId" placeholder="Apellido del usuario" Required>  
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>   
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" name="nombre" id="nombre" style="width:400px" aria-describedby="helpId" placeholder="Nombre del usuario" Required>  
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>   
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" class="form-control" name="correo" id="correo" style="width:400px" aria-describedby="emailHelpId" placeholder="Correo del usuario" Required>      
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" name="telefono" id="telefono" style="width:400px" aria-describedby="helpId" placeholder="Teléfono del usuario" Required>  
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" name="direccion" id="direccion" style="width:400px" aria-describedby="helpId" placeholder="Dirección del usuario" Required>  
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" name="ciudad" id="ciudad" style="width:400px" aria-describedby="helpId" placeholder="Ciudad de recidencia del usuario" Required>  
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="text"
      class="form-control" name="fecha" id="fecha" style="width:400px" aria-describedby="helpId" placeholder="Fecha de nacimiento del usuario" Required>  
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
    </div>

    <div class="form-group">
          <label for="genero">Género</label>
          <select name="genero" id="genero" style="width:400px" class="custom-select" Required>
              <option value ="1">Masculino</option>
              <option value ="2">Femenino</option>                                                        
          </select>
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
    </div>    


  <div class="form-group">
          <label for="rol">Rol</label>
          <select name="rol" id="rol" style="width:400px" class="custom-select" Required>               
              <option value ="4">Paciente</option>                                                      
          </select>
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
    </div>

    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" style="width:400px" class="custom-select" Required>
              <option value ="1">Activado</option>
              <option value ="2">Desactivado</option>                                         
          </select>
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
      </div>
  

    <!--<div class="mb-3">
      <label for="pas" class="form-label">contraseña:</label>
      <input type="text"
      class="form-control" name="pas" id="pas" aria-describedby="helpId" placeholder="Contraseña">  
    </div>-->

    <div align="center" class="card-header">
    <!--<button type="submit" class="btn btn-success">agregar Usuarios</button>-->
    <input  name="submit" id="" class="btn btn-success" type="submit" value="Agregar Usuarios">
    </div>
    
        </form>
    </div>
    
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
