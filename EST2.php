<div class="container" >
  <div class="row">
    <div class="col-md-12">

<style type="text/css">
#i1{color:#0628C0; }
#i2{color:#0628C0; }
#i3{color:#0628C0; }
#i4{color:#0628C0; }
#i5{color:#0628C0; }
#i6{color:#0628C0; }
#i7{color:#0628C0; }
#i8{color:#0628C0; }
#i9{color:#0628C0; }
#i10{color:#0628C0; }
#i11{color:#0628C0; }
#i12{color:#FFFFFF; }
#idem {      /*  MENU  color  axul  */

    background-color: skyblue; 
    cursor: pointer;
    padding:20px;         /*Tamaño  del  boton */
    /*margin-top:1px;*/    /*es de arriba del boton */
      border-radius: 5%;
}
</style>
 
  
<div id="idem" class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA </div>
<?php
            
            //echo form_open_multipart('usuarios/logout');
               echo form_open_multipart('usuarios/USUsalir'); 
 ?>
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary btn" align="center"><i id=i12 class="fas fa-swimmer fa-sm"></i></button>
        </div>
 <?php 
            echo form_close();
 ?> 

  <a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index4">Tabla3</a>
  <a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index">Tabla1</a> 
  <a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index3">Tabla2</a> 
<div class="p-3 mb-2 bg-primary text-white" align="center">  DE  NATACIÓN</div>

<!-- 
   <a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index5">Tabla4</a>
   <a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index6">Tabla5</a> 
-->
 
<!--
 <li><a href="#">
    <i  id=i1 class="fas fa-swimmer fa-6x"></i> 
    <i id=i2 class="fas fa-swimmer fa-5x"></i>
    <i id=i3 class="fas fa-swimmer fa-4x"></i>
    <i id=i4 class="fas fa-swimmer fa-3x"></i>
    <i id=i5 class="fas fa-swimmer fa-2x"></i>
    <i id=i6 class="fas fa-swimmer fa-1x"></i>
    <i id=i7 class="fas fa-swimmer fa-x"></i>
    <i id=i8 class="fas fa-swimmer fa-x"></i>
    <i id=i9 class="fas fa-swimmer fa-x"></i>
     <i id=i10 class="fas fa-swimmer fa-x"></i>
     <i id=i11 class="fas fa-swimmer fa-x"></i>
    </a>
</li>
-->

<link href="css/bootstrap.min.css" rel="stylesheet"> 

  
<!--div style=" font-weight: bold;">REGISTRO  DE  ALUMNOS</div-->
<!--h3 style="font-weight:bolder;">TABLA  4</h3-->
<h3 style="font-weight:bolder;">REGISTRO  DE  INSUMOS  DE  NATACION </h3>

<br>
<?php  
date_default_timezone_set('America/La_Paz');
echo date('Y/m/d H:i:s');

 ?>
<br>
  <!--img width="100" img src="/*<?php echo base_url(); ?>a1.jpg"-->

    <?php
          //  echo form_open_multipart('estudiante/agregarP');
     ?>
         <div style="text-align: right;">
         <!--p class=align"center">INSERTAR</p-->
         <div style=" font-weight: bold;">I N S E R T A R </div>
         <button type="submit" class="btn btn-success btn-xs">Insertar Estudiante</button>
        </div>    
     <?php 
          //  echo form_close();
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
      <th scope="col">DESCRIPCION</th>
      <th scope="col">UNIDAD</th>
      <!--th scope="col">SALDO</th-->
        <th scope="col">PRECIO</th>
       <!--th scope="col">Estado</th-->
       <!--th scope="col">Usuario</th--> 
        <th scope="col">Fecha Registro</th>
        <!--th scope="col">Nivel</th-->

      <th scope="col">MODIFICAR</th>
   <!--   <th scope="col">ELIMINAR</th> --   ELIMINAR FISICA
       <th scope="col">ELIMINAR</th>
    -->
    </tr>
  </thead>
   <!--body id="fondo" style="background-image: url(<?php echo base_url();?>upload/c2.jpg);"-->
   <body style="background: #EDF5FE" img src="<?php echo base_url(); ?> a1.jpg" > 
  <tbody>
<?php 
$indice=1;
foreach ($EST2-> result() as $row)
{
 
 ?>
  <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php  echo $row->descripcion; ?></td>
      <td><?php   echo $row->unidades; ?></td>
      <!--td><?php   echo $row->saldo; ?></td-->
      <td><?php   echo $row->precioBase;  ?></td>
 <!--td><?php  // echo $row->estado;  ?></td-->
      <!--td><?php//   echo $row->tipo;  ?></td-->
      <td><?php   echo $row->fechaRegistro;  ?></td>
      <!--td><?php//   echo $row->carril;  ?></td-->
      <td>
-->

        <!--input type="hidden" name="fechaActual" value="</*?php date_default_timezone_set('America/La_Paz'); echo date('y/m/d g:ia'); ?>"-->
  <?php
    // echo form_open_multipart('estudiante/modificar');
   ?>
<!--         <input type="hidden" name="idestudiantes" value="<?php date_default_timezone_set('America/La_Paz'); echo date('y/m/d g:ia'); ?>">
         <input type="hidden" name="idestudiantes" value="<?php echo $row->idestudiantes; ?>">
         <button type="submit" class="btn btn-primary btn-xs">Modif.</button>
 -->        
         <?php 
    //   echo form_close();
          ?>
       </td>
<!--  ELIMINAR FISICO NO
          <td>
          <?php
    //        echo form_open_multipart('estudiante/EST_eliminar');
          ?>
          <input type="hidden" name="idPersona" value="<?php echo $row->idPersona; ?>">
          <button type="submit" class="btn btn-danger btn-xs">Eliminar.</button>
          <?php 
     //       echo form_close();
          ?>
            </td>
-->
         <td>  
            <?php
    //        echo form_open_multipart('estudiante/PER_eliminar');
            ?>
    <!--        <input type="hidden" name="idestudiantes" value="<?php echo $row->idestudiantes; ?>">
           <button type="submit" class="btn btn-danger btn-xs">Elimina.L</button>
     -->
           <?php 
    //        echo form_close();
           ?>
         </td>
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