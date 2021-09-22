<!--body style="background: #EDF5FE"--> 
  <body background=" "> 
<div class="container">
  <div class="row">
    <div class="col-xl-12">
    <div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA DE NATACION </div>
      <div class="p-3 mb-2 bg-primary text-white"align="center">MODIFICAR REGISTRO</div> 
<?php 

foreach ($infopersona->result() as $row)
{
  echo form_open_multipart('estudiante/modificarbased')
  ?>
      <input type="hidden" name="idPersona" value="<?php echo $row->idPersona; ?>">
      <div class="mb-3">

<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombres" value="<?php echo $row->nombres; ?>">
</div>        


<div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primer_apellido" value="<?php echo $row->primerApellido; ?>">
</div>
<div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundo_apellido" value="<?php echo $row->segundoApellido; ?>">
</div>
<div class="mb-3">
    <label class="form-label">NIVEL</label>
    <input type="text" class="form-control" name="carril" value="<?php echo $row->carril; ?>">
</div>
  


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Modificar</button>
<?php
  echo form_close();
}

?>

 <?php
            
     echo form_open_multipart('usuarios/logout');
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