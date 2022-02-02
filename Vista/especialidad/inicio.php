

<table class="table table-bordered">
    <thead>
    <tr><h1 align="center" class="display-6">Módulo Especialidad</h1></tr>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>  
            <th>Usuario/registro</th>          
            <th>F.Registro</th>
            <th>Usuario/modificó</th>
            <th>F.Modificación</th>
            <th>Estado</th> 
            <th>Acciones</th>           
        </tr>
    </thead>
    <tbody>
    <?php foreach($especialidad as $especialida){?>
        <tr>            
            <!--<td><?php// echo $especialida->nom_esp; ?></td>-->
            
            <td><?php echo $especialida->nom_esp;
               // echo $especialida->nom_esp;
                  /*    if($especialida->nom_esp==1){
                        echo "Medicina Interna";
                      } 
                      if($especialida->nom_esp==2){
                        echo "Pediatría";
                      } 
                      if($especialida->nom_esp==3){
                        echo "Endocrinología";
                      } 
                      if($especialida->nom_esp==4){
                        echo "Ginecología";
                      } 
                      if($especialida->nom_esp==5){
                        echo "Cardiología";
                      }                 
                       */
            ?></td>
            <td><?php echo $especialida->des_esp; ?></td>
            <td><?php echo $especialida->ced_usu_reg_esp; ?></td>
            <td><?php echo $especialida->fec_reg_esp; ?></td>
            <td><?php echo $especialida->ced_usu_mod_esp; ?></td>  
            <td><?php echo $especialida->fec_mod_esp; ?></td>          
            <td><?php if($especialida->est_esp==1){
                        echo "Activado";
                      }
                      if($especialida->est_esp==2){
                          echo "Desactivado";
                      } 
                ?></td>
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=especialidad&accion=crear&id_esp=<?php echo $especialida->id_esp; ?>" class="btn btn-success">Crear</a>
                <a href="?controlador=especialidad&accion=editar&id_esp=<?php echo $especialida->id_esp; ?>" class="btn btn-info">Editar</a>
                <a href="?controlador=especialidad&accion=borrar&id_esp=<?php echo $especialida->id_esp; ?>" class="btn btn-danger">Borrar</a>                
            </div>    
           </td>
        </tr>           
        <?php }?>
    </tbody>
</table>
