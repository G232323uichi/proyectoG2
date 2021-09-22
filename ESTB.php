<div class="container">
  <div class="row">
    <div class="col-md-12">

 
<div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA </div>
<div class="p-3 mb-2 bg-primary text-white" align="center">  DE  NATACIÓN</div>
 <?php
            
            echo form_open_multipart('usuarios/logout');
 ?>
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary btn" align="center">S  A  L  I  R</button>
        </div>
 <?php 
            echo form_close();
 ?> 
 <li><a href="#">
    <i class="fas fa-swimmer fa-5x"></i>
    <i class="fas fa-swimmer fa-4x"></i>
    <i class="fas fa-swimmer fa-3x"></i>
    <i class="fas fa-swimmer fa-2x"></i>
    <i class="fas fa-swimmer fa-1x"></i>
    <i class="fas fa-swimmer fa-x"></i>
    <i class="fas fa-swimmer fa-x"></i>
    </a>
</li>



<link href="css/bootstrap.min.css" rel="stylesheet"> 

  
<!--div style=" font-weight: bold;">REGISTRO  DE  ALUMNOS</div-->
<h3 style="font-weight:bolder;">REGISTRO  DE  ALUMNOS  INSCRITOS</h3>



<?php  
date_default_timezone_set('America/La_Paz');
echo date('Y/m/d H:i:s');

 ?>
<br>


    <?php
            echo form_open_multipart('estudiante/agregarP');
    ?>
<!--     <div style="text-align: right;">
         
         <div style=" font-weight: bold;">I N S E R T A R </div>
         <button type="submit" class="btn btn-success btn-xs">Insertar Estudiante</button>
        </div>  
-->  
     <?php 
            echo form_close();
     ?>
 
<!--
    <a href="<? echo base_url(); ?>index.php/estudiante/agregar">
         <button type="submit" class="btn btn-success btn-xs">Agergar_Estudiante</button> 
    </a>
-->   
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
   

      <th scope="col">Nombres</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
<!--   <th scope="col">Estado</th>    -->
      <th scope="col">CI</th>
<!--   <th scope="col">MODIFICAR</th>   -->
<!--   <th scope="col">ELIMINAR</th>   -->
    </tr>
  </thead>
  <body style="background: #EDF5FE"> 
  <tbody>
<?php 
$indice=1;
foreach ($EST-> result() as $row)
{
 
  ?>
  <tr>
      <th scope="row"><?php echo $indice; ?></th>
 
      <!--td><?php /*  echo $row->nombre; */?></td--> 
        <td><?php  echo $row->nombres; ?></td>
      <td><?php   echo $row->primerApellido; ?></td>
      <td><?php   echo $row->segundoApellido; ?></td>
      <td><?php   echo $row->ci;  ?></td>
      <td>

<!-- 
    <?php
           echo form_open_multipart('estudiante/modificar');
    ?>
         <input type="hidden" name="idPersona" value="<?php echo $row->idPersona; ?>">
         <button type="submit" class="btn btn-primary btn-xs">Modif.</button>
         <?php 
            echo form_close();
          ?>
 -->
       </td>
         <td>
<!--
        <?php
            echo form_open_multipart('estudiante/EST_eliminar');
          ?>
         <input type="hidden" name="idPersona" value="<?php echo $row->idPersona; ?>">
         <button type="submit" class="btn btn-danger btn-xs">Eliminar.</button>
         <?php 
            echo form_close();
          ?>
-->
       </td>
  </tr>
  <?php 
 $indice++;  
}

 ?>


  </tbody>
</table>
      
    </div>
  </div>
</div>