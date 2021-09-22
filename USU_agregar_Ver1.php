
<body style="background: #9FD6F9">
 <section class="content">
       <!--div class="container-fluid"-->
        
         <div class="row">
          
          <div class="col-md-12">
          
            <div class="card card-primary" style="background: #EDF5FE">

<!--
<style type="text/css">
.hijo {
       margin: 0 auto;
      }
 #fondo{margin: 0;
        padding:0 ;
       background-position: center;
       font-family:sans-serif ;
      }

form{  position:fixed;
   top:18%;
   left:39%;
   width:250px;
   }        

  #d1{
     color: #0628C0;    
  }
</style>
-->


 
              <div class="card-header">
                  <div class="card-header">
                      <div class="p-2 mb-2 bg-primary text-white" align="center">ESCUELA  DE  NATACIÓN</div> <!--h3 class="card-title">ESCUELA  DE  NATACIÓN</h3--> </div> 
                  </div> 
            <!--div class="container">
            <div class="col-md-12"-->
 
    </div>
  </div>
 </div>


    <!--section class="content"-->
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary" style="background: #EDF5FE">
              <div class="card-header">
                  <div class="p-2 mb-2 bg-primary text-white" align="center">INSERTAR  REGISTROS  ADMINISTRACIÓN</div>
                <!--h3 class="card-title">INSERTAR  REGISTROS</h3-->
              </div>
     <?php                                     
          echo form_open_multipart('estudiante/USU_agregarbased'); // medoto agregar en  la  BD()
     ?>
              <!--form-->
            <!--div class="card-body"-->
                <div class="form-group">
                      <label class="form-label">Nombres</label>
                       <input style="background:#E3E4FC" type="text" class="form-control" name="nombres" placeholder="Escriba el  Nombre ">
                </div>
                <div class="form-group">
                    <label class="form-label">Apellido Paterno</label>
                    <input style="background: #E3E4FC" type="text-white" class="form-control"name="primer_apellido" placeholder="Escriba Apellido Paterno">
                </div>

                <div class="form-group">
                    <label class="form-label">Apellido Materno</label>
                    <input style="background: #E3E4FC" type="text-white" class="form-control"name="segundo_apellido" placeholder="Escriba Apellido Materno">
                </div>
                <div class="form-group">
                    <label class="form-label">CI</label>
                    <input style="background: #E3E4FC" type="text-white" class="form-control"name="ci" placeholder="Escriba CI">
                </div>

                <div class="form-group">
                  <label class="form-label">login</label>
                   <input style="background: #E3E4FC" type="text" class="form-control" name="login" placeholder="Escriba el login ">
                </div>

                <div class="form-group">
                   <label for="">Rol</label>
                  <select class="form-control" name="tipo" >
                   <option style="background: #E3E4FC" value="" disabled selected="">Seleccione... </option>
                   <option>usu</option>
                   <option >profe</option>
                   <option >admi</option>
                 </select >

                 <!--input type="text" name="tipo" value="<?php echo $row->tipo; ?>"--  >
                    <!--input style="background: #E3E4FC" type="text-white" class="form-control"name="tipo" placeholder="tipo"-->
                 <!--input type="text" class="form-control" name="tipo"-->
                
                </div>

               

    <div class="card-footer">
                  <button type="submit" class="btn btn-success">INSERTE</button>
                   <?php
                   echo form_close();
                   ?>
   <!-- /***************************************************************************************/-->
                   <?php
                    echo form_open_multipart('usuarios/USUsalir');   // Sale a la pag anterior
                   ?> 
       <div style="text-align: right;">                 
        <button style="text-align: right;"type="submit" class="btn btn-primary ">S A R L I R</button>
       </div> 
 <!--   /***************************************************************************************/ -->
          <div>
               <ul data-widget="treeview">
                 <li><a href="#"> VOLVER AL  INICIO</a></li>
              </ul>
          </div>
              <!--/form-->
    </div>
<!--/div>