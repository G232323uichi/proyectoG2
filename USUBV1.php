<div class="container">
  <div class="row">
    <div class="col-md-12">
<!--/**************************  E S T U D I A N T E S  *******************/-->

<style type="text/css">

#i1{color:#2D53FB; }
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

/*  MENU  DESPLEGABLE  */
.mainmenubtn {      /*  MENU  color  axul  */
    background-color: skyblue; 
    color: white;
    border: none;
    cursor: pointer;
    padding:8px;         /*Tamaño  del  boton */
    /*margin-top:1px;*/    /*es de arriba del boton */
      border-radius: 10%;
      box-shadow:2px 2px 2px black;
}

.dropdown {
    position: relative;     le  da mas  dinamismo
    display: inline-block;
}

.mainmenubtn:hover {
    background-color:blue;  /* bottun  Menu lo  hace  cambiar  de  color */
    }
.dropdown-child {            /* trabaja  con  el  anterior  .mainmenubtn:hover  para  dinamico*/
   display: none;
    background-color: skyblue;
    min-width: 200px;
}
.dropdown-child a {         /*  tamaño  de  butttones del  menu*/
    color: darkred;
    padding: 20px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-child {/*  DESPLIEGA  EL  MENU  del  button */
    display: block;
}  
/******** MENU  HORIZONTAL ********/
.top_menu ul{
list-style: none;
float: left;
/*border:1px dashed;    */       /* BORDE  DEL  MENU  PUNTEADO*/
padding: 1%;
width: 150%;
}
.top_menu ul li{ /* EL  MENU  ES  HORONTAL */
    float: left;
    margin-left: 5px;  /*ESPARCIMIENTO  DE  LAS  TABLAS*/
    background-image: url(<?php echo base_url();?>upload/a1.jPG);
   /* padding: 10px;  */   /* TAMAYO DE LOS  BOTONES */
   border-radius: 10%;       /* BORDEAMOS REDONDO DE LOS  BOTONES */
   box-shadow:2px 2px 2px black;
}

.top_menu ul li a:hover{ /* EL  MENU  ES  HORONTAL los Botones  de color blanco  y el HOVER cambia */
    color: #FFFFFF;
    text-decoration: none;
    
}


#idem{ border-radius: 15%;                  /* redondea  el  button  Insertar Usuarios*/
        box-shadow:2px 2px 2px black;
      }  
 #bu13{  box-shadow:2px 2px 2px black; }    /* buton de salida */

</style>

<!--/*****************  BOTON  DE  SALIR ******************************************/-->
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
<!--/***************** ESTUDIANTES   **********************************************/-->
<div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA </div>

<!--/***************** ***********************************************************/-->
<div class="dropdown">
  <!--button class="mainmenubtn"><i id=i1 class="fas fa-swimmer fa-sm"></i> </button-->
    <button class="mainmenubtn" > M E N U </button>
  <div class="dropdown-child">
    <nav class="top_menu">
      <ul>
        <li><a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index3">MENSUALIDADES</a></li> 
        <li><a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index6">INSUMOS</a></li> 
      </ul> 
     </nav>
  </div>
</div>



<!--/*****************  ICONS DE  SALIR ******************************************/-->
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
 <?php /*
            //echo form_open_multipart('usuarios/USUsalir');
            echo form_open_multipart('usuarios/logout');
 ?>         
        <div style="text-align: center;">
        <button id=bu13 type="submit" class="btn btn-primary btn" align="center"> <i id=i13 class="fas fa-swimmer fa-sm"></i></button>
        </div>
 <?php 
            echo form_close(); */
 ?>
<!--/***************** ****************  A L U M  N O S  *******************************************/-->
<div class="p-3 mb-2 bg-primary text-white" align="center">  DE  NATACIÓN</div>
 

<link href="css/bootstrap.min.css" rel="stylesheet"> 

  
<!--div style=" font-weight: bold;">REGISTRO  DE  ALUMNOS</div-->
<h3 style="font-weight:bolder;">REGISTRO  DE  ESTUDIANTES   </h3>



<?php  
date_default_timezone_set('America/La_Paz');
echo date('Y/m/d H:i:s');

 ?>
<br>


    <?php
        /************************    ESTUDIANTES  INSERTAR   ************************/
            echo form_open_multipart('estudiante/agregarP');
    ?>
     <div style="text-align: right;">
         <div style=" font-weight: bold;">INSERTAR </div>
 
         <button type="submit" class="btn btn-success btn-xs"><i id=i13 class="fas fa-swimmer  fa-2x"></i></button>
     </div>  
 
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
      <th scope="col">CI</th>
       <th scope="col">Nivel</th>
      <th scope="col">MODIFICAR</th>
      <th scope="col">ELIMINAR</th >
    </tr>
  </thead>
    <body id="fondo" style="background-image: url(<?php echo base_url();?>upload/p8.jfif);">
  <body style="background: #EDF5FE"> 
       <tbody style="background:#E3E4FC">   <!--COLOR  DE  LA  TABLA  -->
<!--tbody-->
<?php 
$indice=1;
foreach ($EST-> result() as $row)
{
 
  ?>
  <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php  echo $row->nombres; ?></td> 
      <td><?php   echo $row->primerApellido; ?></td>
      <td><?php   echo $row->segundoApellido; ?></td>
      <td><?php   echo $row->ci;  ?></td>
      <td><?php   echo $row->nivel;  ?></td>
      <td>
  <?php     //   F O R M U L A R I O      ********  M O D I F I C A R ***********
            echo form_open_multipart('estudiante/USUmodificar');
   ?>
       <input type="hidden" name="idestudiantes" value="<?php echo $row->idestudiantes; ?>">
         <button type="submit" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></button>
         <?php 
           echo form_close();
          ?>
       </td>
   <!-- /************************E L I M I N A R   LOGICA  *******************/-->

<td>
        <?php
            echo form_open_multipart('estudiante/EST_eliminar');
          ?>
         <input type="hidden" name="idestudiantes" value="<?php echo $row->idestudiantes; ?>">
         <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-eraser"></i></button>
         <?php 
            echo form_close();
          ?>

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