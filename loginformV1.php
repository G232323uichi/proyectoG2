<link href="http://localhost/MVC4/033interfaz/adminlte/css/estilos.css" />


<style type="text/css"> 

 #fondo{margin: 0;     /* Todo el  cuadro  lo  centra */
        padding:0 ;
       background-position: center;
       font-family:sans-serif ;
      }

  form{  position:fixed;  /* login  y  pass se  mueven*/
   top:18%;
   left:39%;
   width:250px;
   }
    #p1{   position:fixed;  /* titulo principal se modifica*/
    top:5%;
    left:31%;
     color: #0628C0 ;  
     font-weight: bold;
              } 

#li1{   position:fixed;  /* cuadrado  or se  muebe   */
     top:39%;
    left:36%;
     color:#EDF5FE;             }



#li2{   position:fixed;   /* las ICON de  nadadores se  mueven y desordenan */
     top:10%;
    left:30%; 
     color:#EDF5FE;  
               }

/* los  nadadores  se  colorean  azules */
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

</style>

<!--/******************************************************************************/-->
<?php
switch ($msg)
{

  case '1':
  $mensaje="ERROR DE  INGRESO ";
  break;
   case '2':
  $mensaje="Acceso no valido";
  break;
   case '3':
  $mensaje="Gracias por usar el sistema";
  break;
  default:
  $mensaje="Ingrese sus datos";
  break;
}

?>
<!--body style="background: #EDF5FE"-->
   <!-- IMAGEN  DE   FONDO  *************************************************************-->
   <body id="fondo" style="background-image: url(<?php echo base_url();?>upload/p9.jpg);">

<!--style type="text/css">  
</style-->
<div>
  <!-- pone  IMG  de  FONDO  *************************************************************  -->  
 <!--img  img src="<?php echo base_url(); ?>upload/p9.jpg"-->    
</div> 
    <!-- CENTRA  EL  LOGIN  Y  EL  PASS  en la  pantalla -->
  <!--form id="formulario" action="enviado.php" method="post" class="text-center"-->  
  
    
<div class="login-box">
  <div class="login-logo">
   
      </h1> <p id="p1"><b>FORMULARIO</b>   <b>DE   INGRESO</b></p> </h1>
        <li id=li2><a  href="#">
        
        <i  id=i1 class="fas fa-swimmer fa-xs"></i> 
        <i id=i2 class="fas fa-swimmer fa-xs"></i>
        <i id=i3 class="fas fa-swimmer fa-xs"></i>
        <i id=i4 class="fas fa-swimmer fa-xs"></i>
        <i id=i5 class="fas fa-swimmer fa-xs"></i>
        <i id=i6 class="fas fa-swimmer fa-xs"></i>
        <i id=i7 class="fas fa-swimmer fa-xs"></i>
        <i id=i8 class="fas fa-swimmer fa-xs"></i>
        <i id=i9 class="fas fa-swimmer fa-xs"></i>
        <i id=i10 class="fas fa-swimmer fa-xs"></i>
        <i id=i11 class="fas fa-swimmer fa-xs"></i>         
         </a>
     </li>      
   </div>
 
     <!-- /.login-logo-->
   <li id=li1> <a>
    <i id=i1  class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer "></i>
    <i id=i1 class="fas fa-swimmer "></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i>
    <i id=i1 class="fas fa-swimmer"></i> 
    </a>    

 
   
      <!--  PONGO  CAR    DEL  gracias por  usar el  sistema   la  imagen  pequeña en el centro-->
    <div id=clas1 class="card-body" style="background-image: url(<?php echo base_url();?>upload/c1.jpg);">
      <p class="login-box-msg"><?php echo $mensaje; ?></p>
   </div>
<?php
                  echo form_open_multipart('usuarios/validarusuario');
?>
    
        <div class="input-group mb-3" >
          <input type="text" name="login" class="form-control" placeholder="Login" style="background: #EDF5FE">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-users"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" style="background: #EDF5FE">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row"  >
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
                 <label for="remember" >
                  <div  id=d1>
                    <div style="font-size:12px;"> Remember Me</div> 
                 </label>
              </div> 
            </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
            <!--button type="submit" class="btn btn-primary btn-xs">INGRESAR</button-->
              <button type="submit" class="btn btn-success btn-xs">INGRESAR</button>
          </div>
          <!-- /.col -->
</div>
  
<?php  echo form_close(); ?>

  <div class="social-auth-links text-center mb-3">
      <div class="social-auth-links text-center"style="background: #EDF5FE">
        <p  style="background: #EDF5FE">- OR -</p>
           <a href="#" class="btn btn-block btn-primary">
           <i class="fab fa-facebook mr-3" ></i> Sign in using Facebook
          </a>
        <!--a href="#" class="btn btn-block btn-primary"-->
          <a href="#" class="btn btn-block btn-info">
          <i class="fab fa-google-plus mr-3" ></i> Sign in using Google+
          </a>
      </div>
  </div>  
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <div style="font-size:15px;">
            <!--a href="forgot-password.html" style="background: #EDF5FE">I forgot my password</a-->
             <a href="forgot-password.html">I forgot my password</a>
        </div> 
      </p>

      <p class="mb-0">
         <div style="font-size:15px;">
        <!--a href="register.html" class="text-center">Register a new membership</a-->
         </div>
      </p>
</div>
</div>
    <!-- /.login-card-body >
  </div>
</div>

< /.login-box >

</div>
 
 -->