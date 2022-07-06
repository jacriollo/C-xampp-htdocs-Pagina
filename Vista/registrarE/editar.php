<tr><h1>    </h1></tr>
<div style="width:600px" class="card">
    <div align="center" class="bg-info" >
        MODIFICAR ESPECIALIDAD DE MÉDICOS
    </div>
    <div class="card-body">
        <form action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $especialidad->id_esp?>" name="id_esp" id="id_esp" aria-describedby="helpId" placeholder="ID">  
    </div>

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $especialidad->id_usu?>" name="id_usu" id="id_usu" aria-describedby="helpId" placeholder="ID">  
    </div>
    

   <div class="form-group">
   <label for="medico"> Médico</label>
              <select name="medico" id="medico" class="custom-select">
                     
              <?php           
              foreach($listaMedicos as $registra){              
                if ($especialidad->id_usu==$registra['id_usu']){
                  echo '<option value ="'. $registra['id_usu'] . '" selected= "true">'. $registra['med']. '</option>' ; 
                }else {
                  echo '<option value ="'. $registra['id_usu'] . '">'. $registra['med']. '</option>' ;
                }
              }
              ?> 
              </option>                                                    
          </select>
      </div>

      <div class="form-group">
            <label for="especialidad"> Especialidad</label>
                <select name="especialidad" id="especialidad" class="custom-select">
                <?php   
                foreach($listaEspecialidad as $registra){           
                  if ($especialidad->id_esp==$registra['id_esp']){
                    echo '<option value ="'. $registra['id_esp'] . '" selected= "true">'. $registra['nom_esp']. '</option>' ; 
                  }else {
                    echo '<option value ="'. $registra['id_esp'] . '">'. $registra['nom_esp']. '</option>' ;
                  }
                }
                 ?>                 
             </select>
            </div> 

    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
          <?php
          if ($especialidad->est_esp==1){
            echo '<option value ="1" selected= "true">Activado</option>' ;           
            echo '<option value ="2" >Desactivado</option>' ; 
          }else {
            echo '<option value ="1" >Activado</option>' ;           
            echo '<option value ="2" selected= "true">Desactivado</option>' ; 
          }
                  
              ?>                                                    
          </select>
      </div>
     

    <div align="center" class="card-header">
      <input name="" id="" class="btn btn-success" type="submit" value="Modificar"> 
    </div>
    
        </form>
    </div>
    
</div>