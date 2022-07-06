

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
        <form class="row g-3 needs-validation" novalidate method="post" action="pacientes_adm.php"> 

    <div class="mb-3" align="center">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="num"
      class="form-control" name="cedula" id="cedula" onkeyup="this.value=this.value.replace(/[^0-9]/, '');" size="11" maxlength="10" style="width:300px" aria-describedby="helpId" placeholder="Cédula del paciente" Required>
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
    </div>    

    <div class="mb-3" align="center">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" name="apellido" id="apellido" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" style="width:300px" aria-describedby="helpId" placeholder="Apellido del paciente" Required>  
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3" align="center">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" name="nombre" id="nombre" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" style="width:300px" aria-describedby="helpId" placeholder="Nombre del paciente" Required>  
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3" align="center">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" class="form-control" name="correo" id="correo" onkeyup=" javascript:validar_email('correo')"  size="30" maxlength="30" style="width:300px" aria-describedby="emailHelpId" placeholder="Correo del paciente" Required>      
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3" align="center">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" name="telefono" id="telefono" onkeypress='return validar2(event)' size="10" maxlength="10" style="width:300px" aria-describedby="helpId" placeholder="Teléfono del paciente" Required>  
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3" align="center">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" name="direccion" id="direccion" size="40" style="width:300px" aria-describedby="helpId" placeholder="Dirección del paciente" Required>  
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3" align="center">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" name="ciudad" id="ciudad" size="40" style="width:300px" aria-describedby="helpId" placeholder="Ciudad de recidencia del paciente" Required>  
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
    </div>

    <div class="mb-3" align="center">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="date"
      class="form-control" name="fecha" id="fecha" value="01-01-2020" min="1995-01-01" max="2020-01-01" style="width:300px" aria-describedby="helpId" placeholder="Fecha de nacimiento del paciente" Required>  
    <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div>   
    </div>

    <div class="form-group" align="center">
          <label for="genero">Género</label>
          <select name="genero" id="genero" class="custom-select"  style="width:300px" >
              <option value ="1">Masculino</option>
              <option value ="2">Femenino</option>                                                        
          </select>
        <!--mensaje para validacion -->     
    <div class="invalid-feedback">Completar los datos.</div> 
        </div>

    <!--<div class="form-group" align="center">
          <label for="estper">Estado de persona</label>
          <select name="estper" id="estper" class="custom-select"  style="width:300px" >
              <option value ="1">Activado</option>
              <option value ="2">Desactivado</option>                                                        
          </select>-->
        <!--mensaje para validacion -->     
    <!--<div class="invalid-feedback">Completar los datos.</div> 
        </div>-->
    

    <div align="center" class="card-header">
    <input  name="" id="" class="btn btn-success" type="submit" value="Agregar Usuarios"  onClick="return check_cedula(this.form)"; >
   <!-- <input action="inicio.php" name="btn" id="btn" class="btn btn-success" type="submit" value="Regresar"  >  -->
    </div>
    

      
     
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

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