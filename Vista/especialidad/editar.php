
<div class="card">
    <div align="center" class="card-header">
        MODIFICAR ESPECIALIDAD
    </div>
    <div class="card-body">
        <form action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $especialidad->id_esp?>" name="id_esp" id="id_esp" aria-describedby="helpId" placeholder="ID">  
    </div>

    

  <!--  <div class="form-group">
          <label for="nombre">Nombre</label>
          <select name="nombre" id="nombre" class="custom-select">
              <option value ="<?php echo $especialidad->nom_esp?>">             
              <?php                    
              /* if ($especialidad->nom_esp==1){
                  echo "Medicina Interna";  
                  echo '<option value ="2">Pediatría</option>';
                  echo '<option value ="3">Endocrinología</option>';
                  echo '<option value ="4">Ginecología</option>';
                  echo '<option value ="5">Cardiología</option>';
                }           
                if ($especialidad->nom_esp==2){
                  echo "Pediatria";
                  echo '<option value ="1">Medicina Interna</option>';
                  echo '<option value ="3">Endocrinología</option>';
                  echo '<option value ="4">Ginecología</option>';
                  echo '<option value ="5">Cardiología</option>';
                }  
                if ($especialidad->nom_esp==3){
                  echo "Endocrinología";
                  echo '<option value ="1">Medicina Interna</option>';
                  echo '<option value ="2">Pediatria</option>';
                  echo '<option value ="4">Ginecología</option>';
                  echo '<option value ="5">Cardiología</option>';
                } 
                if ($especialidad->nom_esp==4){
                  echo "Ginecología";
                  echo '<option value ="1">Medicina Interna</option>';
                  echo '<option value ="2">Pediatria</option>';
                  echo '<option value ="3">Endocrinología</option>';
                  echo '<option value ="5">Cardiología</option>';
                }  
                if ($especialidad->nom_esp==5){
                  echo "Cardiología";
                  echo '<option value ="1">Medicina Interna</option>';
                  echo '<option value ="2">Pediatria</option>';
                  echo '<option value ="3">Endocrinología</option>';
                  echo '<option value ="4">Ginecología</option>';
                }  */            
              ?> </option>                                                    
          </select>
      </div>-->

 <div class="mb-3">
      <label for="v" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" value="<?php echo $especialidad->nom_esp ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">  
    </div>    

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción:</label>
      <input type="text"
      class="form-control" value="<?php echo $especialidad->des_esp?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción">  
    </div>    

   <!-- <div class="mb-3">
      <label for="f_reg" class="form-label">Fecha de registro:</label>
      <input type="text"
      class="form-control" value="<?php echo $especialidad->fec_reg_esp?>" name="f_reg" id="f_reg" aria-describedby="helpId" placeholder="Fecha de registro">  
    </div>

    <div class="mb-3">
      <label for="f_mod" class="form-label">Fecha de modificación:</label>
      <input type="text"
      class="form-control" value="<?php echo $especialidad->fec_mod_esp?>" name="f_mod" id="f_mod" aria-describedby="helpId" placeholder="Fecha de modificación">  
    </div>

    
    <div class="mb-3">
      <label for="usu_r" class="form-label">Usuario de registro:</label>
      <input type="text"
      class="form-control" value="<?php echo $especialidad->ced_usu_reg_esp?>" name="usu_r" id="usu_r" aria-describedby="helpId" placeholder="Usuario de Registro">  
    </div>

    <div class="mb-3">
      <label for="usu_m" class="form-label">Usuario de modificación:</label>
      <input type="text"
      class="form-control" value="<?php echo $especialidad->ced_usu_mod_esp?>" name="usu_m" id="usu_m" aria-describedby="helpId" placeholder="Usuario de modificación">  
    </div>-->

    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
              <option value ="<?php echo $especialidad->est_esp?>">             
              <?php                    
               if ($especialidad->est_esp==1){
                  echo "Activado";  
                  echo '<option value ="2">Desactivado</option>';
                }           
                if ($especialidad->est_esp==2){
                  echo "Desactivado";
                  echo '<option value ="1">Activado</option>';
              }                
              ?> </option>                                                    
          </select>
      </div>
    

    <div align="center" class="card-header">
      <input name="" id="" class="btn btn-success" type="submit" value="Modificar"> 
    </div>
    
        </form>
    </div>
    
</div>