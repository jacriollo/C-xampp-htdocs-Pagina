

<table class="table table-bordered">

    <thead>  
    <tr><h1 align="center" class="display-6">Módulo Usuarios</h1></tr>
 
        <tr>            
            <th><h6 align ="center">Cédula</h6></th>  
            <th><h6 align ="center">Apellido/nombre</h6></th>
            <!--<th>Nombre</th>-->
            <th><h6 align ="center">Correo</h6></th>
            <th><h6 align ="center">Teléfono</h6></th>
            <th><h6 align ="center">Dirección</h6></th>
            <th><h6 align ="center">Ciudad de Recidencia</h6></th>
            <th><h6 align ="center">Fecha de Nacimiento</h6></th>
            <!-- <th>Género</th>-->
            <th><h6 align ="center">Rol</h6></th>
            <th><h6 align ="center">Estado</h6></th>  
            <!--<th >Contraseña</th>-->
            <th><h6 align ="center">Acciones</h6></th>
        </tr>        
    </thead>    
    <tbody>
    <?php foreach($usuarios as $usuario){?>
        <tr>            
            <td><?php echo $usuario->ced_per; ?></td>
            <td><?php echo $usuario->ape_per; echo "  "; echo $usuario->nom_per; ?></td>
            <!--<td><?php// echo $usuario->nom_per; ?></td>-->
            <td><?php echo $usuario->correo_per; ?></td>
            <td><?php echo $usuario->tel_per; ?></td>
            <td><?php echo $usuario->dir_per; ?></td>
            <td><?php echo $usuario->ciu_rec_per; ?></td>
            <td><?php echo $usuario->fec_nac_per; ?></td>            
            <!--<td><?php //if($usuario->gen_per==1){
                        //echo "Masculino";
                     // }
                     // if($usuario->gen_per==2){
                        //  echo "Femenino";
                   //   } 
                ?></td>-->
            
            <td><?php if($usuario->tip_usu==1){
                        echo "Administrador";
                      }
                      if($usuario->tip_usu==2){
                        echo "Médico";
                      }
                      if($usuario->tip_usu==3){
                        echo "Secretraria";
                      }
                      if($usuario->tip_usu==4){
                        echo "Paciente";
                      }
                      ?></td>
            
            <td><?php if($usuario->est_per==1){
                        echo "Activado";
                      }
                      if($usuario->est_per==2){
                          echo "Desactivado";
                      } 
                ?></td>   
            

            <!--<td ><?php // echo $usuario->pas_per; ?></td>-->
            <td>
            <div class="btn-group" role="group" aria-label="">
                
                <a href="?controlador=usuarios&accion=editar&id_per=<?php echo $usuario->id_per; ?>" class="btn btn-info">Editar</a>
                <a href="?controlador=usuarios&accion=borrar&id_per=<?php echo $usuario->id_per; ?>" class="btn btn-danger">Borrar</a>              
            </div>     
           </td>
        </tr>           
        <?php } ?>
        <a style="float: right;" href="?controlador=usuarios&accion=crear&id_per=<?php echo $usuario->id_per; ?>" class="btn btn-primary">Crear</a>
        <!--<div align="left"  class="btn-group" role="group" aria-label="">
                <a href="?controlador=usuarios&accion=crear&id_per=<?php// echo $usuario->id_per; ?>" class="btn btn-success">Crear</a>
                <a href="?controlador=usuarios&accion=editar&id_per=<?php// echo $usuario->id_per; ?>" class="btn btn-info">Editar</a>
                <a href="?controlador=usuarios&accion=borrar&id_per=<?php// echo $usuario->id_per; ?>" class="btn btn-danger">Borrar</a>                
            </div> --> 
    </tbody>
</table>
