
<div class="card">
    <div align="center" class="card-header">
        AGREGAR MEDICINAS
    </div>
    <div class="card-body">
        <form action="" method="post">
   

    <div class="form-group">
          <label for="grupo">Grupo</label>
          <select name="grupo" id="grupo" class="custom-select">
              <option value ="1">Analgesia</option>
              <option value ="2">Anestesia</option>  
              <option value ="3">Cardiología</option>   
              <option value ="4">Dermatología</option>    
              <option value ="5">Endocrinología</option>
              <option value ="6">Enfermedades/infecciosas</option> 
              <option value ="7">Enfermedades/inmunoalérgicas</option>                                                 
          </select>
    </div> 

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text"
      class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del medicamento">  
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción:</label>
      <input type="text"
      class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción del medicamento">  
    </div>

    <div class="mb-3">
      <label for="cantidad" class="form-label">Cantidad:</label>
      <input type="text"
      class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Cantidad">  
    </div>

    <div class="mb-3">
      <label for="presentacion" class="form-label">Presentación:</label>
      <input type="text"
      class="form-control" name="presentacion" id="presentacion" aria-describedby="helpId" placeholder="Presentación">  
    </div>
     
    <div class="form-group">
          <label for="estado">Estado</label>
          <select name="estado" id="estado" class="custom-select">
              <option value ="1">Activado</option>
              <option value ="2">Desactivado</option>                                         
          </select>
      </div>
  

    <div align="center" class="card-header">
    <input  name="" id="" class="btn btn-success" type="submit" value="Agregar Usuarios">
    </div>
    

        </form>
    </div>
    
</div>