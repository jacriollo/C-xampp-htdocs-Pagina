
      

<script>
	
  //Codigo para validar correo electronico
  function validar_email(idMail)
{
	
	object=document.getElementById(idMail);
	valueForm=object.value;

	
	var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(valueForm.search(patron)==0)
	{
		//Mail correcto
		object.style.color="#000";
		return;
	}
	//Mail incorrecto
	object.style.color="#f00";
	//alert("email incorrecto.");
}  

  /*Codigo para validar número de teléfono*/
function validar2(e){
tecla_codigo = (document.all) ? e.keyCode : e.which;
if(tecla_codigo==8)return true;
patron =/[0-9.]/;
tecla_valor = String.fromCharCode(tecla_codigo);
return patron.test(tecla_valor);
}

/*Codigo para validar cedula*/
function check_cedula( form ){
  var cedula = form.cedula.value;
  array = cedula.split( "" );
  num = array.length;
  if ( num == 10 ){
    total = 0;
    digito = (array[9]*1);
    for( i=0; i < (num-1); i++ ){
      mult = 0;
      if ( ( i%2 ) != 0 ) {
        total = total + ( array[i] * 1 );
      }else{
        mult = array[i] * 2;
        if ( mult > 9 )
          total = total + ( mult - 9 );
        else
          total = total + mult;
      }
    }
    decena = total / 10;
    decena = Math.floor( decena );
    decena = ( decena + 1 ) * 10;
    final = ( decena - total );
    if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) { 
      return true;
    }else{
      alert( "La cedula NO es valida!!!" );
      return false;
    }
  }else{
    alert("La cédula ingresada no es valida");
    return false;
  }
}

</script> 

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
      class="form-control" value="<?php echo $secretaria->ced_per?>" name="cedula" id="cedula" onkeyup="this.value=this.value.replace(/[^0-9]/, '');" style="width:400px" aria-describedby="helpId" placeholder="Cédula del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->ape_per?>" name="apellido" id="apellido" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" style="width:400px" aria-describedby="helpId" placeholder="Apellido del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->nom_per?>" name="nombre" id="nombre" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" style="width:400px" aria-describedby="helpId" placeholder="Nombre del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" value="<?php echo $secretaria->correo_per?>" class="form-control" name="correo" id="correo" onkeyup=" javascript:validar_email('correo')"  size="30" maxlength="30" style="width:400px" aria-describedby="emailHelpId" placeholder="Correo del médico"  Required>      
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->tel_per?>" name="telefono" id="telefono" onkeypress='return validar2(event)' size="10" maxlength="10" style="width:400px" aria-describedby="helpId" placeholder="Teléfono del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->dir_per?>" name="direccion" id="direccion" size="40" style="width:400px" aria-describedby="helpId" placeholder="Dirección del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" value="<?php echo $secretaria->ciu_rec_per?>" name="ciudad" id="ciudad" size="40" style="width:400px" aria-describedby="helpId" placeholder="Ciudad de recidencia del médico"  Required>  
           <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div> 
    </div>


    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input class="form-control" type="date" id="fecha" name="fecha" value="<?php echo $secretaria->fec_nac_per?>" min="1995-01-01" max="2020-01-01" style="width:400px" Required>
      <!--<input type="text" 
      class="form-control" name="fecha" id="fecha" value="2018-07-22" min="2018-01-01" max="2018-12-31"  style="width:400px" aria-describedby="helpId" placeholder="Fecha de nacimiento del usuario" Required>-->  
      <!--<input type="text" readonly="" class="form-control" id="checkout" placeholder="Check-out">  value="01-01-2020" min="1995-01-01" max="2020-01-01"-->
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
    <input  name="" id="" class="btn btn-success" type="submit" value="Modificar Usuarios" onClick="return check_cedula(this.form)";>
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