<div class="container">
  <div class="row">
    <div class="col-md-12">


<style type="text/css">
#i1{color:#2D53FB;  margin-top:1px; }
#i2{color:#2D53FB; }
#i3{color:#2D53FB; }
#i4{color:#2D53FB; }
#i5{color:#2D53FB; }
#i6{color:#2D53FB; }
#i7{color:#2D53FB; }
#i8{color:#2D53FB; }
#i9{color:#2D53FB; }
#i10{color:#2D53FB; }
#i11{color:#2D53FB; }

#idem{ border-radius: 15%;                  /* redondea  el  button  Insertar Usuarios*/
        box-shadow:2px 2px 2px black;
      }  
 #bu13{  box-shadow:2px 2px 2px black;       /* buton de salida */

       margin-top:1px;  
       margin-bottom:1px;   /*es de arriba del boton */
      border-radius: 10%;
       }                  

</style>

<div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA </div>
<!--/*****************  BOTON  DE  SALIR ******************************************/-->
 <li><a href="#">
    <i  id=i1 class="fas fa-swimmer fa-6x"></i> 
    <i id=i2 class="fas fa-swimmer fa-5x"></i>
    <i id=i3 class="fas fa-swimmer fa-4x"></i>
    <i id=i4 class="fas fa-swimmer fa-3x"></i>
    <i id=i5 class="fas fa-swimmer fa-2x"></i>
    <i id=i6 class="fas fa-swimmer fa-1x"></i>
    <i id=i7 class="fas fa-swimmer fa-x"></i>
    <i id=i8 class="fas fa-swimmer fa-x"></i>
    </a>
</li>
 <?php
            //echo form_open_multipart('usuarios/USUsalir');
            echo form_open_multipart('usuarios/logout');
 ?>         
        <div style="text-align: center;">
        <button id=bu13 type="submit" class="btn btn-primary btn" align="center"> <i id=i13 class="fas fa-swimmer fa-sm"></i></button>
        </div>
 <?php 
            echo form_close();
 ?>
<!--/***************** ***************  P R O F E S O R  ******************************************/-->
<div class="p-3 mb-2 bg-primary text-white" align="center">  DE  NATACIÓN</div>


<?php  
date_default_timezone_set('America/La_Paz');
echo date('Y/m/d H:i:s');

 ?>
<br>
 




<link href="css/bootstrap.min.css" rel="stylesheet"> 

  
<!--div style=" font-weight: bold;">REGISTRO  DE  ALUMNOS</div-->
<h3 style="font-weight:bolder;">REGISTRO  DE  ALUMNOS  DEL  PROFESOR</h3>





    <?php
           // echo form_open_multipart('estudiante/agregarP');
    ?>
<!--     <div style="text-align: right;">
         <div style=" font-weight: bold;">I N S E R T A R </div>
         <button type="submit" class="btn btn-success btn-xs">Insertar Estudiante</button>
         </div>  
-->  
     <?php 
           // echo form_close();
     ?>
 
<!--
    <a href="<? //echo base_url(); ?>index.php/estudiante/agregar">
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
      <th scope="col">ci</th>
      <th scope="col">MODIFICAR</th>
<!--  <th scope="col">ELIMINAR</th>   -->
    </tr>
  </thead>
    <!--body id="fondo" style="background-image: url(<?php echo base_url();?>upload/p12.jpg);"-->
  <body style="background: #EDF5FE"> 
      <tbody style="background:#E3E4FC">   <!--COLOR  DE  LA  TABLA  -->
<!--tbody-->
<?php 
$indice=1;
foreach ($EST-> result() as $row)
{       /************************    P R O F E  S O R    ************************/
 
  ?>
  <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php  echo $row->nombres; ?></td> 
      <td><?php   echo $row->primerApellido; ?></td>
      <td><?php   echo $row->segundoApellido; ?></td>
      <td><?php   echo $row->ci;  ?></td>
      <td>
  <?php
            //**********     para   M O D I F I C A  R  *** P R O F E    *****************
            echo form_open_multipart('usuarios/USUAmodificar');
   ?>
         <input type="hidden" name="idProfesores" value="<?php echo $row->idProfesores; ?>">
         <button  id=idem type="submit" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></button>
         <?php 
            echo form_close();
          ?>
       </td>
         <td>
<!--NO---
        <?php
           // echo form_open_multipart('estudiante/EST_eliminar');
          ?>
         <input type="hidden" name="idPersona" value="<?php echo $row->idPersona; ?>">
         <button type="submit" class="btn btn-danger btn-xs">Eliminar.</button>
         <?php 
           // echo form_close();
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