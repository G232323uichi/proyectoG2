
<div class="container" >
  <div class="row">
    <div class="col-md-12">


<style type="text/css"> 
/* <!-- DA COLOR A LOS  ICONS-->*/
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
#i12{color:#E3E4FC }
#i13{color:#FFFFFF; }

#idem{ border-radius: 15%;                  /* redondea  el  button  Insertar Usuarios*/
        box-shadow:2px 2px 2px black;
      }  
 #bu13{  box-shadow:2px 2px 2px black; }   /* pinta  lo botones con  marka negra

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

/* #tbo14{     border: solid;   } */   /*LA  TABLA  CON  UN  REMARCAR  con   solid  */

</style>

<link href="css/bootstrap.min.css" rel="stylesheet"> 
    <div class="p-3 bg-primary text-white" align="center">ESCUELA        DE     NATACIÓN </div>

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
<!--/***************** ***********************************************************/-->
<div class="dropdown">
  <!--button class="mainmenubtn"><i id=i1 class="fas fa-swimmer fa-sm"></i> </button-->
    <button class="mainmenubtn" > M E N U </button>
  <div class="dropdown-child">
    <nav class="top_menu">
      <ul>
        <li><a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index3">ESTUDIANTES</a></li> 
        <li><a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index6">PRODUCTOS</a></li> 
        <li><a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index">Tabla1</a></li> 
        <li><a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index5">INSUMOS</a></li>
        <li><a href="http://localhost/MVC4/033interfaz/index.php/estudiante/index4">HORARIOS</a></li>
      </ul> 
     </nav>
  </div>
</div>

        <!--       T I T U L O   -->
   <div class="p-3 mb-2 bg-primary text-white" align="center">REGISTROS  DE  LAS   TABLAS</div>


          <!-- LOS  ICOS  DE  NATACION -->
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

 <br>
 <br>
<!--div style=" font-weight: bold;">REGISTRO  DE  ALUMNOS</div-->
<!--h3 style="font-weight:bolder;" id=i12 >REGISTRO  DE  ALUMNOS  GESTIONADOS  POR  ADMINISTRADOR</h3-->
<h3 style="font-weight:bolder;" align="center">REGISTRO  DE  USUARIOS  GESTIONADOS  POR  ADMINISTRADOR</h3>  
<!--/*****************  BOTON  DE  SALIR ******************************************/-->
 <!--
 <?php          
           echo form_open_multipart('usuarios/logout');
 ?>
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary btn" align="center">S  A  L  I  R</button>
        </div>
 <?php 
            echo form_close();
 ?> 
-->
<!--/******************************************************************************/-->
  
<?php   // FECHA  Y HORA  ACTUAL   
date_default_timezone_set('America/La_Paz');
echo date('Y/m/d H:i:s');
 ?>

<!-- /********************************************************************************/-->
  <!--img width="100" img src="/*<?php echo base_url(); ?>a1.jpg"-->  <!--INSERTAR IMAGEN  -->

 <!--/***********************************************************/  -->
  <!-- /**************  I N S E R T A R  USU *********************/  -->
    <?php
            echo form_open_multipart('estudiante/USU_agregar');
     ?>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
         <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>
          <i id=i11 class="fas fa-swimmer fa-x"></i> <i id=i11 class="fas fa-swimmer fa-x"></i>

          <br>
         <div style="text-align: right;"> <!--PONE  A LA DERECHA  texto  -->
         <div style=" font-weight: bold;">INSERTAR </div>
         
         <!--button id=idem type="submit" class="btn btn-success btn-sm">Insertar Usuarios</button-->
        <button id=bu13 type="submit" class="btn btn-success btn" align="center"> <i id=i13 class="fas fa-swimmer fa-sm"></i></button>
     <!--button type="submit" class="btn btn-success btn-xs"><i class="fas fa-file-import"></i></button-->
        </div>    
     <?php 
          /* CERRAMOS LA  SESSION */  echo form_close();
      ?>
 <!-- /**************    F I N        I N S E R T A R  *********************/  -->
<!--  
    <a href="<? echo base_url(); ?>index.php/estudiante/agregar">
         <button type="submit" class="btn btn-success btn-xs">Agergar_Estudiante</button> 
    </a>
-->   
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">CI</th>
      <!--th scope="col">Estado</th-->
       <th scope="col">Usuario</th>
       <th scope="col">Fecha Registro</th>
       <th scope="col">Nivel</th>
       <th scope="col">MODIFICAR</th>
   <!--   <th scope="col">ELIMINAR</th> --   ELIMINAR FISICA-->
       <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
   <!----------------- PONER  FOTO DE  FONDO   EN  LA   TABLA-------------------------------->

   <body id="fondo" style="background-image: url(<?php echo base_url();?>upload/p4.jfif);">
  <!--body style="background: #EDF5FE" img src="<?php echo base_url(); ?> a1.jpg"--> 
   <tbody  id=tbo14 style="background:#E3E4FC">   <!--COLOR  DE  LA  TABLA  ---------------->
  <!--tbody style="background: #EDF5FE"-->

 <!------------------------------------------------------------------------------------------->
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
      <!--td><?php   echo $row->login;  ?></td-->
      <td><?php   echo $row->tipo;  ?></td>
      <td><?php   echo $row->fechaRegistro;  ?></td>
      <td><?php   echo $row->nivel;  ?></td>

    

        <!--input type="hidden" name="fechaActual" value="</*?php date_default_timezone_set('America/La_Paz'); echo date('y/m/d g:ia'); ?>"-->
      
<td>

<?php   //   F O R M U L A R I O      ********  M O D I F I C A R ***********
          
             echo form_open_multipart('usuarios/USUmodificar'); 
 ?>
         <!--input type="hidden" name="idusuarios" value="<?php date_default_timezone_set('America/La_Paz'); echo date('y/m/d g:ia'); ?>"-->

         <input type="hidden" name="idusuarios" value="<?php echo $row->idusuarios; ?>">
         <button  id=bu13 type="submit" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></button> 
 <?php 
            echo form_close();
 ?>
 </td>






<!--  ELIMINACION  FISICO 
         <td>
        <?php
            echo form_open_multipart('estudiante/EST_eliminar');
          ?>
         <input type="hidden" name="idPersona" value="<?php echo $row->idPersona; ?>">
         <button type="submit" class="btn btn-danger btn-xs">Eliminar.</button>
         <?php 
            echo form_close();
          ?>
            </td>
-->
     <td>  
          <?php
          /************************E L I M I N A R   LOGICA  *******************/
            //echo form_open_multipart('estudiante/PER_eliminar');
            echo form_open_multipart('estudiante/USU_eliminar');
          ?>
         <input type="hidden" name="idusuarios" value="<?php echo $row->idusuarios; ?>">
         <!--button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-broom"></i></button-->
          <button  id=bu13 type="submit" class="btn btn-danger btn-xs"><i class="fas fa-eraser"></i></button>
         
         <?php 
            echo form_close();
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
       <div>
            <ul data-widget="treeview">
            <li><a href="#" id=i12> VOLVER AL  INICIO</a></li>
            </ul>  
        </div>
    </div>
  </div>
</div>