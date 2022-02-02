
<div class="card">
    <div align="center" class="card-header">
        AGREGAR ESPECIALIDAD DE MÉDICOS
    </div>
    <div class="card-body">
            <form action="" method="post">

            

                <div class="mb-3">
                <label for="cedula" class="form-label">Cédula:</label>
                <input type="text"
                class="form-control" value="<?php echo $registrar->ced_per?>" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Cédula del médico">  
                </div>    

                <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text"
                class="form-control" value="<?php echo $registrar->ape_per?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del médico">  
                </div>

                <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text"
                class="form-control" value="<?php echo $registrar->nom_per?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del médico">  
                </div>
                               
                <div class="form-group">
                <label for="esp"> Especialidad</label>
                <select name="esp" id="esp" class="custom-select">
                    <option value ="1">Especialidad</option>
                    <option value ="2">Especialidad</option>
                    <option value ="3">Especialidad</option>
                </select>
                </div> 

                <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="custom-select">
                    <!--<option value ="<?php //echo $registrar->est_esp?>">-->             
                    <?php                    
                        if ($registrar->est_esp==1){
                        echo "Activado";  
                        echo '<option value ="2">Desactivado</option>';
                        }           
                        if ($registrar->est_esp==2){
                        echo "Desactivado";
                        echo '<option value ="1">Activado</option>';
                        }                
                    ?> </option>                                                    
                </select>
                </div>


            

                <!--<div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad:</label>
                <input type="text"
                class="form-control" value="<?php// echo $registrar->nom_per?>" name="especialidad" id="especialidad" aria-describedby="helpId" placeholder="Especialidad">  
                </div> -->                  

                <div align="center" class="card-header">
                    <input name="" id="" class="btn btn-success" type="submit" value="Agregar Especialidad">
                </div> 
            </form>
    </div>
    
</div>