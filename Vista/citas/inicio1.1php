
 
<table class="table table-bordered"> 
    <thead>
    <tr><h1 align="center" class="display-6">Citas Médicas</h1></tr>
    <tr><td colspan="8"> <a href="?controlador=citas&accion=crear&idEsp=0&idMed=0&fec=" class="btn btn-success">Crear</a> </td></tr>
        <tr>
            <th>Fecha</th>
            <th>Hora</th>            
            <th>Paciente</th>
            <th>Estado</th>
            <th>Observación</th>
            <th>Diagnóstico</th>           
            <th>Receta</th>           
            <th>Acciones</th>     
        </tr>
    </thead>
    <tbody>
    <?php foreach($catalogos as $catalogo){?>
        <tr>            
            
            <td>
              <?php 
            /*  if($catalogo->gru_cat==1){
                        echo "Analgesia";
                      }
                      if($catalogo->gru_cat==2){
                        echo "Anestesia";
                      } 
                      if($catalogo->gru_cat==3){
                        echo "Cardiología";
                      } 
                      if($catalogo->gru_cat==4){
                        echo "Dermatología";
                      } 
                      if($catalogo->gru_cat==5){
                        echo "Endocrinología";
                      } 
                      if($catalogo->gru_cat==6){
                        echo "Enfermedades/infecciosas";
                      } 
                      if($catalogo->gru_cat==7){
                        echo "Enfermedades/inmunoalérgicas";
                      } 
                       */                                               
                      ?>
                      </td>


            <td><?php echo $catalogo->nom_cat; ?></td>
            <td><?php echo $catalogo->des_cat; ?></td>
            <td><?php echo $catalogo->can_cat; ?></td>
            <td><?php echo $catalogo->pre_cat; ?></td>
            <td><?php if($catalogo->est_cat==1){
                        echo "Activado";
                      }
                      if($catalogo->est_cat==2){
                        echo "Desactivado";
                      }
                      ?></td>           
            
            <td>
            <div class="btn-group" role="group" aria-label="">                
                <a href="?controlador=citas&accion=editar&id_cat=<?php echo $catalogo->id_cat; ?>" class="btn btn-info">Editar</a>
                <a href="?controlador=citas&accion=borrar&id_cat=<?php echo $catalogo->id_cat; ?>" class="btn btn-danger">Borrar</a>                
            </div>    
           </td>
        </tr>           
        <?php }?>
    </tbody>
</table>
