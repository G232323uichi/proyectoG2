<div class="container">
  <div class="row">
    <div class="col-md-12">
<?php

  echo form_open_multipart('estudiante/agregarbd'); // medoto Modificar()
 ?>
  
  <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="pApellido" placeholder="Escriba el Primer Apellido">
  </div>
   <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="sAplellido"placeholder="Escriba el Segundo Apellido ">
  </div>
    <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Escriba el Nombre ">
  </div>
    <div class="mb-3">
    <label class="form-label">Nota</label>
    <input type="text" class="form-control" name="Nota" placeholder="Escriba la Nota ">
  </div>

  <button type="submit" class="btn btn-primary">INSERT-Submit</button>

 <?php
  echo form_close();
  ?>

    </div>
  </div>
</div>