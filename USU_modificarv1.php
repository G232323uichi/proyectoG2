<body style="background: #9FD6F9"> 
  <body background=" "> 
      
<div class="container">
  <div class="row">
    <div class="col-xl-12">
     <div class="p-2 mb-2 bg-primary text-white" align="center">ESCUELA  DE  NATACIÓN </div>
     <!--/*****************  BOTON  DE  SALIR ******************************************/-->
 <?php
            echo form_open_multipart('usuarios/USUsalir');
            //echo form_open_multipart('usuarios/logout');
 ?>         
        <div style="text-align: center;">
        <button id=bu13 type="submit" class="btn btn-primary btn" align="center"> <i id=i13 class="fas fa-swimmer fa-sm"></i></button>
        </div>
 <?php 
            echo form_close();
 ?>
<!--/***************** ***********************************************************/-->
     <div class="p-2 mb-2 bg-primary text-white"align="center">MODIFICAR REGISTRO POR EL ADMINISTRADOR</div> 
<?php 

foreach ($infousuario->result() as $row)
{
  //echo form_open_multipart('estudiante/USUmodificarbased')
   echo form_open_multipart('usuarios/USUmodificarbased')

?>
     <input  type="hidden" name="idusuarios" value="<?php echo $row->idusuarios; ?>">
      <!--div class="mb-3"-->

<div class="mb-3" >
    <label class="form-label">Nombre</label><!--Lo q entra al formulario tiene  q ser = a lo entrada a la BD  -->
    <input  style="background: #EDF5FE" type="text" class="form-control" name="nombres" value="<?php echo $row->nombres; ?>">
</div>        
<div class="mb-3">
    <label class="form-label">Primer Apellido</label>
               <input style="background: #EDF5FE" type="text" class="form-control" name="primer_apellido" value="<?php echo $row->primerApellido; ?>">
</div>
<div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
               <input style="background: #EDF5FE" type="text" class="form-control" name="segundo_apellido" value="<?php echo $row->segundoApellido; ?>">
</div>
<div class="mb-3">
    <label class="form-label">CI</label>
    <input style="background: #EDF5FE" type="text" class="form-control" name="ci" value="<?php echo $row->ci; ?>">
</div>

    <div class="mb-3">
                   <label class="form-label">Rol</label>
              <select  style="background: #EDF5FE" class="form-control" name="tipo" >
                   <option style="background: #EDF5FE" value="" disabled selected="">Seleccione... </option>
                   <option>usu</option>
                   <option >profe</option>
                   <option >admi</option>
              </select >
    
    <!--input style="background: #EDF5FE" type="text" class="form-control" name="tipo" value="<?php echo $row->tipo; ?>"-->
</div>

<div class="mb-3">
    <label class="form-label">NIVEL</label>
             <select  style="background: #EDF5FE" class="form-control" name="nivel" >
                   <option style="background: #EDF5FE" value="" disabled selected="">Seleccione... </option>
                   <option>1</option>
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                   <option>5</option>

              </select >



    <!--input style="background: #EDF5FE" type="text" class="form-control" name="nivel" value="<?php echo $row->nivel; ?>"-->
</div>

<!--div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div-->

  <button type="submit" class="btn btn-primary">Modificar</button>
<?php
  echo form_close();
}

?>
<!--
 <?php
            
   // echo form_open_multipart('usuarios/logout');
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