<div class="card">
    <div align="center" class="card-header">
        MODIFICAR MÉDICOS
    </div>
    <div class="card-body">
        <form action="" method="post">

    <div class="mb-3">      
      <input type="hidden"
      class="form-control" value="<?php echo $medico->id_per?>" name="id_per" id="id_per" aria-describedby="helpId" placeholder="id"  >  
    </div>

    <div class="mb-3">
      <label for="cedula" class="form-label">Cédula:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->ced_per?>" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Cédula del médico">  
    </div>    

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->ape_per?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del médico">  
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->nom_per?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del médico">  
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input type="email" value="<?php echo $medico->correo_per?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del médico">      
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->tel_per?>" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Teléfono del médico">  
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->dir_per?>" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Dirección del médico">  
    </div>

    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->ciu_rec_per?>" name="ciudad" id="ciudad" aria-describedby="helpId" placeholder="Ciudad de recidencia del médico">  
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha de nacimiento:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->fec_nac_per?>" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha de nacimiento del médico">  
    </div>

    <div class="mb-3">
      <label for="genero" class="form-label">Género:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->gen_per?>" name="genero" id="genero" aria-describedby="helpId" placeholder="Género del médico">  
    </div>

    <div class="mb-3">
      <label for="tipusu" class="form-label">Tipo de usuario:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->tip_usu?>" name="tipusu" id="tipusu" aria-describedby="helpId" placeholder="Tipo de usuario">  
    </div>

    <div class="mb-3">
      <label for="estper" class="form-label">Estado de persona:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->est_per?>" name="estper" id="estper" aria-describedby="helpId" placeholder="Estado de persona">  
    </div>

    <div class="mb-3">
      <label for="pas" class="form-label">Contraseña:</label>
      <input type="text"
      class="form-control" value="<?php echo $medico->pas_per?>" name="pas" id="pas" aria-describedby="helpId" placeholder="Contraseña">  
    </div>

    <input name="" id="" class="btn btn-success" type="submit" value="Modificar">

        </form>
    </div>
    
</div>