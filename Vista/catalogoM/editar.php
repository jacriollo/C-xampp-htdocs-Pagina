

<div class="card">
    <div align="center" class="card-header">
        MODIFICAR MEDICINAS
    </div>
    <div class="card-body">
        <form action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $catalogos->id_cat?>" name="id" id="id" aria-describedby="helpId" placeholder="ID">  
    </div> 

    <div class="form-group">
          <label for="grupo">Grupo</label>
          <select name="grupo" id="grupo" class="custom-select">
              <option value ="<?php echo $catalogos->gru_cat?>">             
              <?php                    
               if ($catalogos->gru_cat==1){
                  echo "Analgesia";  
                  echo '<option value ="2">Anestesia</option>';
                  echo '<option value ="3">Cardiología</option>';
                  echo '<option value ="4">Dermatología</option>';
                  echo '<option value ="5">Endocrinología</option>';
                  echo '<option value ="6">Enfermedades/infecciosas</option>';
                  echo '<option value ="7">Enfermedades/inmunoalérgicas</option>';
                }           
                if ($catalogos->gru_cat==2){
                  echo "Anestesia";
                  echo '<option value ="1">Analgesia</option>';                  
                  echo '<option value ="3">Cardiología</option>';
                  echo '<option value ="4">Dermatología</option>';
                  echo '<option value ="5">Endocrinología</option>';
                  echo '<option value ="6">Enfermedades/infecciosas</option>';
                  echo '<option value ="7">Enfermedades/inmunoalérgicas</option>';
                }  
                if ($catalogos->gru_cat==3){
                  echo "Cardiología";
                  echo '<option value ="1">Analgesia</option>';
                  echo '<option value ="2">Anestesia</option>';
                  echo '<option value ="4">Dermatología</option>';
                  echo '<option value ="5">Endocrinología</option>';
                  echo '<option value ="6">Enfermedades/infecciosas</option>';
                  echo '<option value ="7">Enfermedades/inmunoalérgicas</option>';
                } 
                if ($catalogos->gru_cat==4){
                  echo "Dermatología";
                  echo '<option value ="1">Analgesia</option>';
                  echo '<option value ="2">Anestesia</option>';
                  echo '<option value ="3">Cardiología</option>';
                  echo '<option value ="5">Endocrinología</option>';
                  echo '<option value ="6">Enfermedades/infecciosas</option>';
                  echo '<option value ="7">Enfermedades/inmunoalérgicas</option>';
                }  
                if ($catalogos->gru_cat==5){
                  echo "Endocrinología";
                  echo '<option value ="1">Analgesia</option>';
                  echo '<option value ="2">Anestesia</option>';
                  echo '<option value ="3">Cardiología</option>';
                  echo '<option value ="4">Dermatología</option>';
                  echo '<option value ="6">Enfermedades/infecciosas</option>';
                  echo '<option value ="7">Enfermedades/inmunoalérgicas</option>';
                }     
                if ($catalogos->gru_cat==6){
                    echo "Enfermedades/infecciosas";
                    echo '<option value ="1">Analgesia</option>';
                    echo '<option value ="2">Anestesia</option>';
                    echo '<option value ="3">Cardiología</option>';
                    echo '<option value ="4">Dermatología</option>';
                    echo '<option value ="5">Endocrinología</option>';
                    echo '<option value ="7">Enfermedades/inmunoalérgicas</option>';
                  }   
                  if ($catalogos->gru_cat==7){
                    echo "Enfermedades/inmunoalérgicas";
                    echo '<option value ="1">Analgesia</option>';
                    echo '<option value ="2">Anestesia</option>';
                    echo '<option value ="3">Cardiología</option>';
                    echo '<option value ="4">Dermatología</option>';
                    echo '<option value ="5">Endocrinología</option>';
                    echo '<option value ="6">Enfermedades/infecciosas</option>';
                  }          
              ?> </option>                                                    
          </select>
      </div>


    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre de Medicina:</label>
      <input type="text"
      class="form-control" value="<?php echo $catalogos->nom_cat?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre de Medicina">  
    </div>    

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción de medicina:</label>
      <input type="text"
      class="form-control" value="<?php echo $catalogos->des_cat?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción de medicina">  
    </div>

    <div class="mb-3">
      <label for="cantidad" class="form-label">Cantidad:</label>
      <input type="text"
      class="form-control" value="<?php echo $catalogos->can_cat?>" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Cantidad">  
    </div>

    
    <div class="mb-3">
      <label for="presentacion" class="form-label">Presentación:</label>
      <input type="text"
      class="form-control" value="<?php echo $catalogos->pre_cat?>" name="presentacion" id="presentacion" aria-describedby="helpId" placeholder="Presentación">  
    </div>    

    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
              <option value ="<?php echo $catalogos->est_cat?>">             
              <?php                    
               if ($catalogos->est_cat==1){
                  echo "Activado";  
                  echo '<option value ="2">Desactivado</option>';
                }           
                if ($catalogos->est_cat==2){
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