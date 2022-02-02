<div class="card">
    <div align="center" class="card-header">
        MODIFICAR USUARIOS
    </div>
    <div class="card-body">
        <form action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $usuarios->id_per?>" name="id_per" id="id_per" aria-describedby="helpId" placeholder="id"  >  
    </div>

    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="text"
      class="form-control" value="<?php echo $usuarios->ced_per?>" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Cédula del médico">  
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" value="<?php echo $usuarios->ape_per?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del médico">  
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" value="<?php echo $usuarios->nom_per?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del médico">  
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" value="<?php echo $usuarios->correo_per?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del médico">      
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" value="<?php echo $usuarios->tel_per?>" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Teléfono del médico">  
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" value="<?php echo $usuarios->dir_per?>" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Dirección del médico">  
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" value="<?php echo $usuarios->ciu_rec_per?>" name="ciudad" id="ciudad" aria-describedby="helpId" placeholder="Ciudad de recidencia del médico">  
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="text"
      class="form-control" value="<?php echo $usuarios->fec_nac_per?>" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha de nacimiento del médico">  
    </div>

    <div class="form-group">
          <label for="genero">Género</label>
          <select name="genero" id="genero" class="custom-select">
              <option value ="<?php echo $usuarios->gen_per?>"> <?php                    
               if ($usuarios->gen_per==1){
                  echo "Masculino";  
                  echo '<option value ="2">Femenino</option>';
                }           
                if ($usuarios->gen_per==2){
                  echo "Femenino";
                  echo '<option value ="1">Masculino</option>';
              }                
              ?> </option>                                            
          </select>
      </div>    
      
      <div class="form-group">
          <label for="rol">Rol de usuario</label>
          <select name="rol" id="rol" class="custom-select">
              <option value ="<?php echo $usuarios->tip_usu?>">             
              <?php                    
               if ($usuarios->tip_usu==1){
                  echo "Administrador";  
                  echo '<option value ="2">Médico</option>';
                  echo '<option value ="3">Secretaria</option>';
                  echo '<option value ="4">Paciente</option>';
                }           
                if ($usuarios->tip_usu==2){
                  echo "Médico";
                  echo '<option value ="1">Administrador</option>';
                  echo '<option value ="3">Secretaria</option>';
                  echo '<option value ="4">Paciente</option>';
                }   
                if ($usuarios->tip_usu==3){
                  echo "Secretaria";
                  echo '<option value ="1">Administrador</option>';
                  echo '<option value ="2">Médico</option>';
                  echo '<option value ="4">Paciente</option>';
                }       
                if ($usuarios->tip_usu==4){
                  echo "Paciente";
                  echo '<option value ="1">Administrador</option>';
                  echo '<option value ="2">Médico</option>';
                  echo '<option value ="3">Secretaria</option>';
                }               
              ?> </option>
                                                   
          </select>
      </div>


      <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
              <option value ="<?php echo $usuarios->est_per?>">             
              <?php                    
               if ($usuarios->est_per==1){
                  echo "Activado";  
                  echo '<option value ="2">Desactivado</option>';
                }           
                if ($usuarios->est_per==2){
                  echo "Desactivado";
                  echo '<option value ="1">Activado</option>';
              }                
              ?> </option>
                                                   
          </select>
      </div>
    

    <!--<div class="mb-3">
      <label for="pas" class="form-label">Contraseña:</label>
      <input type="text"
      class="form-control" value="<?php// echo $usuarios->pas_per?>" name="pas" id="pas" aria-describedby="helpId" placeholder="Contraseña">  
    </div>-->

    <div align="center" class="card-header">
    <input  name="" id="" class="btn btn-success" type="submit" value="Modificar Usuarios">
    <!--<input  name="" id="" class="btn btn-success" type="submit" value="Regresar" action="index.php">-->
    </div>
    

        </form>
    </div>
    
</div>