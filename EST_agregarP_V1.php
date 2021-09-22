
<div class="container">
  <div class="row">
    <div class="col-md-12">
       <div class="p-3 mb-2 bg-primary text-white"align="center">ESCUELA  DE  NATACIÓN</div>
        <div class="p-3 mb-2 bg-primary text-white"align="center">INSERTAR REGISTRO ESTUDIANTES</div>
<?php

  echo form_open_multipart('estudiante/agregarbased'); // medoto agregar en  la  BD()
 ?>
  
<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombres" placeholder="Escriba la Nombre ">
  </div>

  <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primer_apellido" placeholder="Escriba el Primer Apellido">
  </div>
   <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
  <input type="text" class="form-control" name="segundo_apellido"placeholder="Escriba el Segundo Apellido ">
  </div>
    <div class="mb-3">
    <label class="form-label">Nivel</label>
    <input type="text" class="form-control" name="nivel" placeholder="Escriba el CI ">
  </div>
<!--
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nota" placeholder="Escriba la Nombre ">
  </div>
-->
  <button type="submit" class="btn btn-success">INSERTE</button>

 <?php
  echo form_close();
  ?>
 <?php
      echo form_open_multipart('usuarios/USUsalir');       
     //echo form_open_multipart('usuarios/logout');
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