<body style="background: #EDF5FE"> 
<div class="container">
  <div class="row">
    <div class="col-xl-12">
    <div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA DE NATACION </div>
      <div class="p-3 mb-2 bg-primary text-white"align="center">ELIMINAR REGISTRO MENSUALIDAD</div> 
      <!--****************** MENSUALIDAD  ************************--> 
<?php 

//foreach ($elipersona->result() as $row)
  foreach ($EST->result() as $row)

{
  echo form_open_multipart('estudiante/eliminarbased')
  ?>
      <input type="hidden" name="idmensualidad" value="<?php echo $row->idmensualidad; ?>">
      <div class="mb-3">


<!--div class="mb-3">
    <label class="form-label">Estado Actual</label>
    <label class="form-label">SI  VA  ELIMINAR  CAMBIE  EL  VALOR   A    " 0 "</label>
    <input type="text" class="form-control" name="estado" value="<?php echo $row->estado; ?>">
</div-->
 <div class="mb-3">
    
    <label class="form-label">SI ESTA SEGUR@  DE  ELIMINAR  CAMBIE  EL  VALOR   A    " 0 "</label>
        <select class="form-control" name="estado">
            <option>1</option>
            <option>0 </option>
        </select>
    <!--input type="text" class="form-control" name="estado" value="<?php echo $row->estado; ?>"-->
</div> 

<!--  CHECK No F. ---
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
-->
  <button type="submit" class="btn btn-primary">Eliminar</button>
<?php
  echo form_close();
}

?>

 <?php
            
     //echo form_open_multipart('usuarios/logout');
      echo form_open_multipart('usuarios/USUsalir');
 ?>
    <div style="text-align: right;">
    <button type="submit" class="btn btn-primary " align="center">S A R L I R</button>
     </div>    
 <?php 
            echo form_close();
 ?> 


    </div>
  </div>
</div>