


<table class="table table-bordered">
    <thead>
    <tr><h1 align="center" class="display-6">Módulo Registrar Especialidad a Médicos</h1></tr>
        <tr>         
            <th>Cédula</th>
            <th>Apellido</th>
            <th>Nombre</th>    
            <th>Rol</th>                         
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($registrar as $registra){?>
        <tr>  
                                     
            <td><?php echo $registra->ced_per; ?></td>
            <td><?php echo $registra->ape_per; ?></td>
            <td><?php echo $registra->nom_per; ?></td>           
            <td><?php if($registra->tip_usu){                
                        echo"Médico";
                      }
                ?></td> 
                
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=registrarE&accion=editar&id_usu=<?php echo $registra->id_usu; ?>" class="btn btn-success">Registrar</a>
                <!--<a href="?controlador=medicos&accion=editar&id_per=<?php// echo $registra->id_per; ?>" class="btn btn-info">Editar</a>--> 
               <!--<a href="?controlador=medicos&accion=borrar&id_per=<?php //echo $registra->id_per; ?>" class="btn btn-danger">Borrar</a>-->                
            </div>    
           </td>
        </tr>           
        <?php } ?>
    </tbody>
</table>