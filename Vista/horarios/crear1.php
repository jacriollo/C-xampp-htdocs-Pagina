




<tr><h1>    </h1></tr>
<div style="width:400px" class="card" >
    <div align="center" class="bg-info">
        AGREGAR HORARIOS A MÉDICOS
    </div>       


    <div  class="card-body">      
        <form  class="row g-3 needs-validation" novalidate action="" method="post">

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de atención:</label>
        <input 
        class="form-control" type="date" name="fecha" id="fecha" value="01-01-2020" min="2022-06-01" max="2030-01-01" style="width:250px" aria-describedby="helpId" placeholder="Fecha de nacimiento del usuario" Required>  
        <!--mensaje para validacion   -->   
        <div class="invalid-feedback">Completar los datos.</div>     
    </div>

    <div style="width:300px" class="form-group">
          <label  for="horaI">Hora de inicio</label>
          <select name="horaI" id="horaI" class="custom-select" Required>
              <option value ="" selected="true">Seleccione la hora de inicio</option>
              <option value ="09:00">09:00 AM</option>
              <option value ="10:00">10:00 AM</option>    
              <option value ="11:00">11:00 AM</option>
              <option value ="12:00">12:00 AM</option>
              <option value ="13:00">13:00 PM</option>
              <option value ="14:00">14:00 PM</option>
              <option value ="15:00">15:00 PM</option>
              <option value ="16:00">16:00 PM</option>
              <option value ="17:00">17:00 PM</option>
              <option value ="18:00">18:00 PM</option>                                                 
          </select>              
      <div class="invalid-feedback">Completar los datos.</div> 
   

    <div style="width:285px" class="form-group">
          <label  for="horaF">Hora de fin</label>
          <select name="horaF" id="horaF" class="custom-select" Required>
              <option value ="" selected="true">Seleccione la hora de fin</option>
              <option value ="09:00">09:00 AM</option> 
              <option value ="10:00">10:00 AM</option>    
              <option value ="11:00">11:00 AM</option>
              <option value ="12:00">12:00 AM</option>
              <option value ="13:00">13:00 PM</option>
              <option value ="14:00">14:00 PM</option>
              <option value ="15:00">15:00 PM</option>
              <option value ="16:00">16:00 PM</option>
              <option value ="17:00">17:00 PM</option>
              <option value ="18:00">18:00 PM</option>                                                 
          </select>              
    <div class="invalid-feedback">Completar los datos.</div>  


     <div style="width:285px" class="form-group">
          <label  for="intervalo">Intervalo de citas</label>
          <select  name="intervalo" id="intervalo" class="custom-select" Required>
              <option value ="" selected="true">Seleccionar el intervalo</option>               
              <option value ="30">30 Minutos</option>
              <option value ="45">45 Minutos</option>
              <!--<option value ="7">60 minutos</option> -->                                                             
          </select>              
     <div class="invalid-feedback">Completar los datos.</div>  

     <div>  
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

    <div align="center" class="card-header">
      <input name="" id="" class="btn btn-success" type="submit" value="Agregar Horario">
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



<!--
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Emaillllll</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
-->