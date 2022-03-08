<div style="width:600px" class="card">
    <div align="center" class="card-header">
        MODIFICAR PACIENTES
    </div>
    <div class="card-body">
        <form action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $pacientes->id_per?>" name="id_per" id="id_per" style="width:400px" aria-describedby="helpId" placeholder="id"  >  
    </div>

    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->ced_per?>" name="cedula" id="cedula" style="width:400px" aria-describedby="helpId" placeholder="Cédula">  
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->ape_per?>" name="apellido" id="apellido" style="width:400px" aria-describedby="helpId" placeholder="Apellido">  
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->nom_per?>" name="nombre" id="nombre" style="width:400px" aria-describedby="helpId" placeholder="Nombre">  
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" value="<?php echo $pacientes->correo_per?>" class="form-control" name="correo" id="correo" style="width:400px" aria-describedby="emailHelpId" placeholder="Correo">      
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->tel_per?>" name="telefono" id="telefono" style="width:400px" aria-describedby="helpId" placeholder="Teléfono">  
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->dir_per?>" name="direccion" id="direccion" style="width:400px" aria-describedby="helpId" placeholder="Dirección">  
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->ciu_rec_per?>" name="ciudad" id="ciudad" style="width:400px" aria-describedby="helpId" placeholder="Ciudad de recidencia">  
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->fec_nac_per?>" name="fecha" id="fecha" style="width:400px" aria-describedby="helpId" placeholder="Fecha de nacimiento">  
    </div>

    
    <div class="form-group">
          <label for="genero">Género</label>
          <select name="genero" id="genero" style="width:345px" class="custom-select">
              <option value ="<?php echo $pacientes->gen_per?>"> <?php                    
               if ($pacientes->gen_per==1){
                  echo "Masculino";  
                  echo '<option value ="2">Femenino</option>';
                }           
                if ($pacientes->gen_per==2){
                  echo "Femenino";
                  echo '<option value ="1">Masculino</option>';
              }                
              ?> </option>                                            
          </select>
      </div>     
      
      <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $pacientes->tip_usu?>" name="tipusu" id="tipusu" style="width:400px" aria-describedby="helpId" placeholder="Rol">  
      </div>  
  
    <div class="mb-3">      
      <input type="hidden" 
      class="form-control" value="<?php echo $pacientes->est_per ?>" name="estado" id="estado" style="width:400px" aria-describedby="helpId" placeholder="Estado">  
      </div>     

    <div class="mb-3">
      <label for="pas" class="form-label">Contraseña:</label>
      <input type="text"
      class="form-control" value="<?php echo $pacientes->pas_per?>" name="pas" id="pas" style="width:400px" aria-describedby="helpId" placeholder="Contraseña">  
    </div>
    
    <div align="center" class="card-header">
      <input name="" id="" class="btn btn-success" type="submit" value="Modificar">
      <input name="" id="" class="btn btn-success" type="submit" value="Regresar"  onclick="location.href='./indexpaciente.php'">
    </div>
        </form>

    </div>
    
</div>