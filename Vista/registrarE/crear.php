
<div class="card">
    <div align="center" class="card-header">
        AGREGAR ESPECIALIDAD DE MÉDICOS
    </div>
    <div class="card-body">
            <form action="" method="post">  

            <div class="form-group">
            <label for="medico"> Médico</label>
                <select name="medico" id="medico" class="custom-select">
                <?php   
                foreach($listaMedicos as $registra){       
                     echo '<option value ="'. $registra['id_usu'] . '">'. $registra['med']. '</option>' ;
                 }
                 ?>                 
             </select>
            </div> 

            <div class="form-group">
            <label for="especialidad"> Especialidad</label>
                <select name="especialidad" id="especialidad" class="custom-select">
                <?php   
                foreach($listaEspecialidad as $registra){       
                     echo '<option value ="'. $registra['id_esp'] . '">'. $registra['nom_esp']. '</option>' ;
                 }
                 ?>                 
             </select>
            </div> 

            <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
              <option value ="1" selected="true">Activado</option>
              <option value ="2">Desactivado</option>                                         
          </select>
      </div>              

                <div align="center" class="card-header">
                    <input name="" id="" class="btn btn-success" type="submit" value="Crear médico especialidad">
                </div> 
            </form>
    </div>
    
</div>