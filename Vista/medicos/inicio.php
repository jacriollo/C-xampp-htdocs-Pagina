

<table class="table table-bordered">
    <thead>
    <tr><h1 align="center" class="display-6">Módulo Médicos</h1></tr>
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
    <?php foreach($medicos as $medico){?>
        <tr>            
            <td><?php echo $medico->ced_per; ?></td>
            <td><?php echo $medico->ape_per; ?></td>
            <td><?php echo $medico->nom_per; ?></td>
            <td><?php echo $medico->correo_per; ?></td>
            <td><?php echo $medico->tel_per; ?></td>
            <td><?php echo $medico->dir_per; ?></td>
            <td><?php echo $medico->ciu_rec_per; ?></td>
            <td><?php echo $medico->fec_nac_per; ?></td>
            <td><?php 
                    if($medico->gen_per==1){
                            echo"Masculino";
                    }if($medico->gen_per==2){
                            echo"Femenino";
                    } ?></td>

            <td><?php
                    if($medico->tip_usu==2){
                            echo "Médico";
                    }?></td>
            <td><?php
                    if($medico->est_per==1){
                            echo "Activado";
                    }if($medico->est_per==2){
                            echo "Desactivado";
                    }    
                ?></td>
                        
            <!--<td><?php// echo $medico->pas_per; ?></td>-->
            <td>
            <div class="btn-group" role="group" aria-label="">
                <!--<a href="?controlador=medicos&accion=crear&id_per=<?php// echo $medico->id_per; ?>" class="btn btn-success">Crear</a>-->
                <a href="?controlador=medicos&accion=editar&id_per=<?php echo $medico->id_per; ?>" class="btn btn-info">Editar</a>
                <!--<a href="?controlador=medicos&accion=borrar&id_per=<?php// echo $medico->id_per; ?>" class="btn btn-danger">Borrar</a>-->                
            </div>    
           </td>
        </tr>           
        <?php } ?>
    </tbody>
</table>
