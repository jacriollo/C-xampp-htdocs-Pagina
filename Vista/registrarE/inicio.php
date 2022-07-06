


<table class="table table-bordered">
    <thead>
    <tr><h1 align="center" class="display-6">Módulo Registrar Especialidad a Médicos</h1></tr>
        <tr>         
            <th><h5 align ="center">Médicos</h5></th>
            <th><h5 align ="center">Especialidad</h5></th>
            <th><h5 align ="center">Estado</h5></th>                       
            <th><h5 align ="center">Acciones
            <a href="?controlador=registrarE&accion=crear" class="btn btn-primary">Crear</a></h5></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($registrar as $registra){?>
        <tr>                         
            <td><?php echo $registra->med; ?></td> 
            <td><?php echo $registra->nom_esp; ?></td>           
            <td><?php
                if($registra->est_esp==1){
                    echo "Activado";
                }else { 
                    echo "Desactivado";
                } 
                ?></td>
                 <td>
            <div class="btn-group" role="group" aria-label="">
                
                <a href="?controlador=registrarE&accion=editar&id_usu=<?php echo $registra->id_usu; ?>&id_esp=<?php echo $registra->id_esp; ?>" class="btn btn-info">Editar</a>
                <a href="?controlador=registrarE&accion=borrar&id_usu=<?php echo $registra->id_usu; ?>&id_esp=<?php echo $registra->id_esp; ?>" class="btn btn-danger">Borrar</a>                 
            </div>    
           </td>
        </tr>           
        <?php } ?>
    </tbody>
</table>