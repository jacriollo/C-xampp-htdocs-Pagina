


<table class="table table-bordered">

<thead>  
<tr><h1 align="center" class="display-6">Módulo Registrar Horarios</h1></tr>

    <tr>            
        <th>Cédula</th>
        <th>Apellido</th>
        <th>Nombre</th>   
        <th>Rol</th>        
        <th>Acciones</th>
    </tr>        
</thead>    
<tbody>
<?php foreach($medicos as $medico){?>
    <tr>            
        <td><?php echo $medico->ced_per; ?></td>
        <td><?php echo $medico->ape_per; ?></td>
        <td><?php echo $medico->nom_per; ?></td>
        <td><?php if($medico->tip_usu){
                    echo "Médico";
                  } 
            ?></td>
        <td>
        <div class="btn-group" role="group" aria-label="">
  
        
          <a href="?controlador=horarios&accion=crear&id_usu=<?php echo $medico->id_usu; ?>" class="btn btn-success">Crear</a>
            <!--<a href="?controlador=horarios&accion=editar&id_per=<?php //echo $medico->id_per; ?>" class="btn btn-info">Editar</a>
            <a href="?controlador=horarios&accion=borrar&id_per=<?php //echo $medico->id_per; ?>" class="btn btn-danger">Borrar</a>-->               
        </div>    
       </td>
    </tr>           
    <?php } ?>
</tbody>
</table>
