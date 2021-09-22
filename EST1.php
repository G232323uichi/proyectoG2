<div class="container">
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
 
 <div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA</div> 
<!--div id="idem" class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA</div-->
<?php           
  
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
      <!--h3 style="font-weight:bolder;">TABLA  3</h3-->
<h3 style="font-weight:bolder;">REGISTRO HORARIOS DE PROFESORES</h3>

    <table class="table">
  <thead>
    <tr>

    <th scope="col">No</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
        <th scope="col">CI</th>
    </tr>
  </thead>
  <tbody>
<?php 
$indice=1;
foreach ($EST1-> result() as $row)
{
 
  ?>
  <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php   echo $row->nombres;  ?></td>
      <td><?php   echo $row->primerApellido; ?></td>
      <td><?php   echo $row->segundoApellido; ?></td>
       <td><?php   echo $row->ci;  ?></td>
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