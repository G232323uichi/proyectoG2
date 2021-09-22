<div class="container">
  <div class="row">
    <div class="col-md-12">
<?php
foreach ($infoestudiante->result() as $row)
 {                                     
   echo form_open_multipart('estudiante/ESTmodificarbd'); // medoto Modificar()
     
 ?>
  <input type="hidden" name="idestudiantes" value="<?php echo $row->idestudiantes; ?>">
  <div class="mb-3">

    <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $row->nombres; ?>">
    </div>

    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="pApellido" value="<?php echo $row->primerApellido; ?>">
  </div>
   <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="sAplellido" value="<?php echo $row->segundoAplellido; ?>">
  </div>
    
   <!--div class="mb-3">
    <label class="form-label">Nota</label>
    <input type="text" class="form-control" name="ci" value="<?php echo $row->ci; ?>">
  </div-->

  <button type="submit" class="btn btn-primary">MODIFI-Submit</button>

 <?php
  echo form_close();
 }
  ?>


    </div>
  </div>
</div>