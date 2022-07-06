



<table class="table table-bordered">

<thead>  
<tr><h1 align="center" class="display-6">Pacientes</h1></tr>

    <tr>            
        <th>Cédula</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Ciudad de Recidencia</th>
        <th>Fecha de Nacimiento</th>
        <th>Género</th>
        <th>Rol de usuario</th>
        <th>Estado</th>  
        <!--<th>Contraseña</th>-->
        <th>Acciones</th>
    </tr>        
</thead>    
<tbody>
<?php foreach($pacientes as $paciente){?>
    <tr>            
        <td><?php echo $paciente->ced_per; ?></td>
        <td><?php echo $paciente->ape_per; ?></td>
        <td><?php echo $paciente->nom_per; ?></td>
        <td><?php echo $paciente->correo_per; ?></td>
        <td><?php echo $paciente->tel_per; ?></td>
        <td><?php echo $paciente->dir_per; ?></td>
        <td><?php echo $paciente->ciu_rec_per; ?></td>
        <td><?php echo $paciente->fec_nac_per; ?></td>            
        <td><?php if($paciente->gen_per==1){
                    echo "Masculino";
                  }
                  if($paciente->gen_per==2){
                      echo "Femenino";
                  } 
            ?></td>      
         
        <td><?php if($paciente->tip_usu==4){
                    echo "Paciente";
                  }
                  ?></td>
        
        <td><?php if($paciente->est_per==1){
                    echo "Activado";
                  }
                  if($paciente->est_per==2){
                      echo "Desactivado";
                  } 
            ?></td>  
        

        <!--<td><?php //echo $paciente->pas_per; ?></td>-->
        <td>
        <div class="btn-group" role="group" aria-label="">
            <!--<a href="?controlador=secretaria&accion=crear&id_per=<?php //echo $paciente->id_per; ?>" class="btn btn-success">Crear</a>-->
            <a href="?controlador=pacientes&accion=editar&id_per=<?php echo $paciente->id_per; ?>" class="btn btn-info">Editar</a>
           <!--  <a href="?controlador=secretaria&accion=borrar&id_per=<?php //echo $paciente->id_per; ?>" class="btn btn-danger">Borrar</a>-->                
        </div>    
       </td>
    </tr>           
    <?php } ?>
</tbody>
</table>
