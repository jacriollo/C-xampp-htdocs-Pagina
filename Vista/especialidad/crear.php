

<div class="card">
    <div align="center" class="card-header">
        AGREGAR ESPECIALIDAD
    </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate action="" method="post">

     
   <!-- <div class="form-group">
          <label for="nombre">Nombre</label>
          <select name="nombre" id="nombre" class="custom-select">
              <option value ="1">Medicina Interna</option>
              <option value ="2">Pediatría</option>
              <option value ="3">Endocrinología</option>  
              <option value ="4">Ginecología</option> 
              <option value ="5">Cardiología</option>                                      
          </select>
      </div>--> 

      <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" name="nombre" id="nombre" type="text" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" aria-describedby="helpId" placeholder="Nombre de Especialidad" Required> 
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>   
    </div>


    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción:</label>
      <input type="text"
      class="form-control" name="descripcion" id="descripcion" type="text" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" aria-describedby="helpId" placeholder="Descripcion de Especialidad" Required> 
      <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>                                            
    </div>

   

    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select" Required>
              <option value ="1" selected="true">Activado</option>
              <option value ="2">Desactivado</option>                                         
          </select>
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>  
      </div>
    <!--<div class="mb-3">
      <label for="estado" class="form-label">Estado:</label>
      <input type="text"
      class="form-control" name="estado" id="estado" aria-describedby="helpId" placeholder="Estado">  
    </div> -->   
    
    <div align="center" class="card-header">
      <input name="" id="" class="btn btn-success" type="submit" value="Agregar Especialidad">
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