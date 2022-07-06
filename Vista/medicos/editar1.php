

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
<tr><h1>    </h1></tr>
<div style="width:600px" class="card">
    <div align="center" class="bg-info">
        MODIFICAR MÉDICO
    </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate action="" action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $medico->id_per?>" name="id_per" id="id_per" style="width:400px" aria-describedby="helpId" placeholder="id"  >  
    </div>

    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->ced_per?>" name="cedula" id="cedula" onkeyup="this.value=this.value.replace(/[^0-9]/, '');" size="11" maxlength="10"  style="width:400px" aria-describedby="helpId" placeholder="Cédula del médico" Required>  
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->ape_per?>" name="apellido" id="apellido" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" style="width:400px" aria-describedby="helpId" placeholder="Apellido del médico" Required>  
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->nom_per?>" name="nombre" id="nombre" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" style="width:400px" aria-describedby="helpId" placeholder="Nombre del médico" Required>  
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" value="<?php echo $medico->correo_per?>" class="form-control" name="correo" id="correo" onkeyup=" javascript:validar_email('correo')"  size="30" maxlength="30" style="width:400px" aria-describedby="emailHelpId" placeholder="Correo del médico" Required>      
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->tel_per?>" name="telefono" id="telefono"  onkeypress='return validar2(event)' size="10" maxlength="10" style="width:400px" aria-describedby="helpId" placeholder="Teléfono del médico" Required>  
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->dir_per?>" name="direccion" id="direccion" size="40" style="width:400px" aria-describedby="helpId" placeholder="Dirección del médico" Required>  
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->ciu_rec_per?>" name="ciudad" id="ciudad" size="40" style="width:400px" aria-describedby="helpId" placeholder="Ciudad de recidencia del médico" Required>  
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="date"
      class="form-control" value="<?php echo $medico->fec_nac_per?>" min="1995-01-01" max="2020-01-01" name="fecha" id="fecha" style="width:400px" aria-describedby="helpId" placeholder="Fecha de nacimiento del médico" Required>  
          <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
    </div>

    <div class="form-group">
          <label for="genero">Género</label>
          <select name="genero" id="genero" style="width:345px" class="custom-select" Required>
              <option value ="<?php echo $medico->gen_per?>"> <?php                    
               if ($medico->gen_per==1){
                  echo "Masculino";  
                  echo '<option value ="2">Femenino</option>';
                }           
                if ($medico->gen_per==2){
                  echo "Femenino";
                  echo '<option value ="1">Masculino</option>';
              }                
              ?> </option>                                            
          </select>
              <!--mensaje para validacion -->     
     <div class="invalid-feedback">Completar los datos.</div>
      </div>    
          
      
      <div class="mb-3">
      <!--<label for="rol" class="form-label">Rol de usuario:</label>-->
      <input type="hidden"
      class="form-control" value="<?php echo $medico->tip_usu?>" name="rol" id="rol" style="width:400px" aria-describedby="helpId" placeholder="Rol" >  
    </div>
  

    <div class="mb-3">
      <!--<label for="estado" class="form-label">Estado:</label>-->
      <input type="hidden"
      class="form-control" value="<?php echo $medico->est_per?>" name="estado" id="estado" style="width:400px" aria-describedby="helpId" placeholder="Estado">  
    </div>

            
    <div class="mb-3">
      <label for="pas" class="form-label">Contraseña:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->pas_per?>" name="pas" id="pas" style="width:400px" aria-describedby="helpId" placeholder="Contraseña" Required>
        <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div>            
    </div>
    
    <div align="center" class="card-header">
    <input  name="" id="" class="btn btn-success" type="submit" value="Modificar Médico" onClick="return check_cedula(this.form)";>
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