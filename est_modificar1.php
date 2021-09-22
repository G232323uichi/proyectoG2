<div class="container">
  <div class="row">
    <div class="col-md-12">
<?php
foreach ($infoestudiante->result() as $row)
 {
  echo form_open_multipart('estudiante1/modificarbd1'); // medoto Modificar()
 ?>
  <input type="hidden" name="idEstudianteA" value="<?php echo $row->idEstudiante; ?>">
  <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="pApellido" value="<?php echo $row->pApellido; ?>">
  </div>
   <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="sAplellido" value="<?php echo $row->sAplellido; ?>">
  </div>
    <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $row->nombre; ?>">
  </div>
   <div class="mb-3">
    <label class="form-label">Nota</label>
    <input type="text" class="form-control" name="Nota" value="<?php echo $row->Nota; ?>">
  </div>

  <button type="submit" class="btn btn-primary">MODIFICAR</button>

 <?php
  echo form_close();
 }
  ?>

    </div>
  </div>
</div>