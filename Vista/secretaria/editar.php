
<div style="width:600px" class="card">
    <div align="center" class="card-header">
        MODIFICAR PACIENTES
    </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $secretaria->id_per?>" name="id_per" id="id_per" style="width:400px" aria-describedby="helpId" placeholder="id"   >  
    </div>

    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->ced_per?>" name="cedula" id="cedula" style="width:400px" aria-describedby="helpId" placeholder="Cédula del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->ape_per?>" name="apellido" id="apellido" style="width:400px" aria-describedby="helpId" placeholder="Apellido del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->nom_per?>" name="nombre" id="nombre" style="width:400px" aria-describedby="helpId" placeholder="Nombre del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" value="<?php echo $secretaria->correo_per?>" class="form-control" name="correo" id="correo" style="width:400px" aria-describedby="emailHelpId" placeholder="Correo del médico"  Required>      
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->tel_per?>" name="telefono" id="telefono" style="width:400px" aria-describedby="helpId" placeholder="Teléfono del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->dir_per?>" name="direccion" id="direccion" style="width:400px" aria-describedby="helpId" placeholder="Dirección del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->ciu_rec_per?>" name="ciudad" id="ciudad" style="width:400px" aria-describedby="helpId" placeholder="Ciudad de recidencia del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->fec_nac_per?>" name="fecha" id="fecha" style="width:400px" aria-describedby="helpId" placeholder="Fecha de nacimiento del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="form-group">
          <label for="genero">Género</label>
          <select name="genero" id="genero" style="width:400px" class="custom-select"  Required>
              <option value ="<?php echo $secretaria->gen_per?>"> <?php                    
               if ($secretaria->gen_per==1){
                  echo "Masculino";  
                  echo '<option value ="2">Femenino</option>';
                }           
                if ($secretaria->gen_per==2){
                  echo "Femenino";
                  echo '<option value ="1">Masculino</option>';
              }                
              ?> </option>                                            
          </select>
               <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
      </div>    
      
      <div class="form-group">
          <label for="rol">Rol de usuario</label>
          <select name="rol" id="rol" style="width:400px" class="custom-select"  Required>
              <option value ="<?php echo $secretaria->tip_usu?>">             
              <?php                    
                if ($secretaria->tip_usu==4){
                  echo "Paciente";                 
                }               
              ?> </option>                                                   
          </select>
               <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
      </div>


      <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" style="width:400px" class="custom-select"  Required>
              <option value ="<?php echo $secretaria->est_per?>">             
              <?php                    
               if ($secretaria->est_per==1){
                  echo "Activado";  
                  echo '<option value ="2">Desactivado</option>';
                }           
                if ($secretaria->est_per==2){
                  echo "Desactivado";
                  echo '<option value ="1">Activado</option>';
              }                
              ?> </option>                                                   
          </select>
               <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
      </div>
    

    <!--<div class="mb-3">
      <label for="pas" class="form-label">Contraseña:</label>
      <input type="text"
      class="form-control" value="<?php// echo $usuarios->pas_per?>" name="pas" id="pas" aria-describedby="helpId" placeholder="Contraseña">  
    </div>-->

    <div align="center" class="card-header">
    <input  name=" submit" id="" class="btn btn-success" type="submit" value="Modificar Usuarios">
    <!--<input  name="" id="" class="btn btn-success" type="submit" value="Regresar" action="index.php">-->
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