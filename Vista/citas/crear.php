
<div class="card">
    <div align="center" class="card-header">
        AGENDAR CITAS MÉDICAS
    </div>
    <div class="card-body">
     
  
    <div class="form-group">
      <label for="especialidad"> Especialidad</label>
        <select name="especialidad" id="especialidad" class="custom-select" >
        <option value ="0">Seleccionar Especialidad</option>
              <?php   
                foreach($listaEspecialidad as $registra){     
                  if($idEsp >0 && $idEsp == $registra['id_esp'])  
                    echo '<option value ="'. $registra['id_esp'] . '" selected= "true">'. $registra['nom_esp']. '</option>' ;
                  else
                    echo '<option value ="'. $registra['id_esp'] . '">'. $registra['nom_esp']. '</option>' ;
                 } 
                 ?>                 
        </select>  
    </div> 
    <div class="form-group">
      <label for="medico">Médico</label>
      <select name="medico" id="medico" class="custom-select">
      <option value ="0">Seleccionar Médico</option>
                <?php   
                foreach($listaMedicos as $registra){       
                  if($idMed >0 && $idMed == $registra['id_usu'])  
                      echo '<option value ="'. $registra['id_usu'] . '" selected= "true">'. $registra['med']. '</option>' ;
                  else
                      echo '<option value ="'. $registra['id_usu'] . '">'. $registra['med']. '</option>' ;
                 }
                 ?>                 
      </select>
    </div> 
   <!--  <div class="form-group">
       <label for="grupo">Fecha y Hora</label> 
    <div class="row">
      <div class="col-sm-6"><input class="form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31"></div>
      <div class="col-sm-5"><input class="form-control" type="time" id="start" name="trip-start"  min="09:00" max="18:00"></div>
    <div class="col-sm-1"><button type="button" class="btn btn-primary">Primary</button></div>
      <div class="col-sm-1"><a href="?controlador=citas&accion=editar&id_cat=<?php echo $catalogo->id_cat; ?>" class="btn btn-primary">Buscar</a></div>
    </div> 
    </div>-->
     <div class="form-group">
    <label for="grupo">Fecha</label> 
        <input class="form-control" type="date" id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>">
    </div>
    <div class="form-group">
      <label for="hora">Horas Disponibles</label>
      <select name="hora" id="hora" class="custom-select">
      <option value ="0">Seleccionar Hora</option>
                <?php   
                foreach($listaHoras as $registra){       
                     echo '<option value ="'. $registra . '">'. $registra. '</option>' ;
                 }
                 ?>                 
      </select>
    </div> 
 <!--    <div class="form-group">
    <label for="grupo">Hora</label> 
        <input class="form-control" type="time" id="start" name="trip-start"  min="09:00" max="18:00">
    </div>
  
   <datalist id="listahorasdeseadas"> list="listahorasdeseadas"
  <option value="16:00">
  <option value="16:30">
  <option value="17:00">
  <option value="17:30">
  </datalist>-->
    <div class="form-group">
      <label for="paciente">Paciente</label>
      <select name="paciente" id="paciente" class="custom-select">
                <?php   
               foreach($listaPacientes as $registra){       
                     echo '<option value ="'. $registra['id_usu'] . '">'. $registra['pac']. '</option>' ;
                 }
                 ?>                 
      </select>
    </div> 

     
    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
              <option value ="1">Activado</option>
              <option value ="2">Desactivado</option>                                         
          </select>
      </div>
  

    <div align="center" class="card-header">
    <input  name="" id="" class="btn btn-success" type="submit" value="Agregar Usuarios">
    </div>    
        </form>
    </div>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    var ruta = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length + 1));
    var ruta1 = ruta.substring(0, ruta.lastIndexOf('/'));
  $('select#especialidad').on('change', function () {
    var idEspecialidad = $("#especialidad").val();      
    if(idEspecialidad >0)
       window.location.href = ruta+"/?controlador=citas&accion=crear&idEsp="+idEspecialidad+"&idMed=0&fec=";
  }); 
  $('select#medico').on('change', function () {
    var idEspecialidad = $("#especialidad").val();      
    var idMedico = $("#medico").val();       
    var fecha = $("#fecha").val();      
    if(idEspecialidad >0 && idMedico >0)
       window.location.href = ruta+"/?controlador=citas&accion=crear&idEsp="+idEspecialidad+"&idMed="+idMedico+"&fec="+fecha;    
  }); 
  $('#fecha').blur(function () {
    var idEspecialidad = $("#especialidad").val();      
    var idMedico = $("#medico").val();      
    var fecha = $("#fecha").val();      
    if(fecha !="" && idMedico >0 && idEspecialidad >0)
       window.location.href = ruta+"/?controlador=citas&accion=crear&idEsp="+idEspecialidad+"&idMed="+idMedico+"&fec="+fecha;    
  });
 /*function onTraervalor(){
   console.log("val ", $("#especialidad").val())
   return $("#especialidad").val();
 }
  onchange="cargarMedicosEspecialidad(this.value)"
 function cargarMedicosEspecialidad(value){
  console.log("----sss", value)
  var tabla = $("#medico");
  console.log("----tabla", tabla)

  $('select#especialidad').on('change', function () {
 /*   console.log(document.getElementById("idEnlaceEsp") ); 
    document.getElementById("idEnlaceEsp").href = "?controlador=citas&accion=obtenerMedicos&idEsp="+ $("#especialidad").val();
    var url = document.URL;
     var newAdditionalURL = "";
    var tempArray = url.split("?"); 
    var baseURL = tempArray[0]; 
    var aditionalURL = tempArray[1]; 
    
    //console.log(baseURL)
    
  //  console.log(aditionalURL)
    var temp = ""; 
    if(aditionalURL) { 
      var tempArray = aditionalURL.split("&");
       for ( var i in tempArray ){ 
         if(tempArray[i].indexOf("rows") == -1){ 
           newAdditionalURL += temp+tempArray[i]; temp = "&"; 
         }
       } 
    } 
      var rows_txt = temp+"rows=10"; 
    //  console.log(rows_txt)
      var finalURL = "controlador=citas&accion=obtenerMedicos&idEsp=?"+ $("#especialidad").val();



   // window.location.search = jquery.query.set("idEsp", $("#especialidad").val()); 
    var provincia = $("#especialidad").val();
  // $("#especialidad").val()= provincia;
   var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    var ruta = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length + 1));
    var ruta1 = ruta.substring(0, ruta.lastIndexOf('/'));
    console.log("----ruta ", ruta)
        var provincia = $("#especialidad").val();
        console.log("----idEsp ", provincia)
        var tabla = $("#medico");
        if(provincia >0)
        window.location.href = "http://localhost/Pagina/?controlador=citas&accion=crear&idEsp="+provincia+"&idMed=0";
        $.post('http://localhost/Pagina/Controlador/controladorcitasAjax.php', { provincia }) 
  //$.post('http://localhost/Pagina/Controlador/controlador_citas.php/obtenerMedicos', { provincia }) 
  .done(function (data) {
          console.log(data) 
                    if (data.success) {
                     /*   tabla.find("option").remove();
                        var canton = data.data.canton;
                        var ip;
                        for (var idx in canton)
                        {
                            ip = canton[idx];
                            tabla.append("<option value='" + ip.id_can + "'>" + ip.nom_can + "</option> ");
                        }
                    } else {
                        tabla.find("option").remove();
                        tabla.append("<option value='0'>No existen provincias creadas</option>");
                    }
                });
    });
        /*while (ruta1.substring(ruta1.lastIndexOf('/') + 1, ruta1.length) !== "index.php") {
            ruta1 = ruta1.substring(0, ruta1.lastIndexOf('/'));
        }*/
        /*$.post(ruta + '/Controlador/controlador_citas/obtenerMedicos', {idEsp: provincia})
                .done(function (data) {
                    if (data.success) {
                        tabla.find("option").remove();
                        var canton = data.data.canton;
                        var ip;
                        for (var idx in canton)
                        {
                            ip = canton[idx];
                            tabla.append("<option value='" + ip.id_can + "'>" + ip.nom_can + "</option> ");
                        }
                    } else {
                        tabla.find("option").remove();
                        tabla.append("<option value='0'>No existen provincias creadas</option>");
                    }
                });*/
             
</script>