<body style="background: #EDF5FE"> 
<div class="container">
  <div class="row">
    <div class="col-xl-12">

<style type="text/css"> 

 #bu13{  box-shadow:2px 2px 2px black; }

</style>
    <div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA DE NATACION </div>

<!--/*****************  BOTON  DE  SALIR ******************************************/-->
 <?php
            echo form_open_multipart('usuarios/USUsalir'); 
 
 ?>         
        <div style="text-align: center;">
        <button id=bu13 type="submit" class="btn btn-primary btn" align="center"> <i id=i13 class="fas fa-swimmer fa-sm"></i></button>
        </div>
 <?php 
            echo form_close();
 ?>
<!--/***************** ***********************************************************/-->
      <div class="p-3 mb-2 bg-primary text-white"align="center">ELIMINAR  REGISTRO DE ESTUDIANTE</div> 
<?php 

foreach ($eliestudiante->result() as $row)
{
 // echo form_open_multipart('usuarios/eliminarbased')
    //echo form_open_multipart('estudiante/USU_eliminarbased')
  echo form_open_multipart('estudiante/Est_eliminarbased')
                            
 ?>
  <div class="mb-3">
      <input type="hidden" name="idestudiantes" value="<?php echo $row->idestudiantes; ?>">
  </div>


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
<!--
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

-->
    </div>
  </div>
</div>