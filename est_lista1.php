<div clas="content-wrapper"> 
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">      
             <h1>DATA_TABLA "B" </h1>       
      </div>  
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"></a>
            </li>
          </ol>
        </div>
    </div>  
  </section
</div>

<div class="container"> 
  <div class="row">
    <div class="col-md-12">
  <a href="http://localhost/mvc1/03interfaz/index.php/estudiante1/index1">Tabla B</a>
  <p></p>
 <a href="http://localhost/mvc1/03interfaz/index.php/estudiante/index">Tabla A</a>
    <?php
  // http://localhost/mvc/03interfaz/index.php/estudiante/index     listar tabla
  //http://localhost/mvc/03interfaz/index.php/estudiante/modificar   Para modific
  //http://localhost/mvc/03interfaz/index.php/estudiante/agregarbd  para inisertar
     echo form_open_multipart('estudiante1/agregar1');
    ?>
    <button type="submit" class="btn btn-primary btn-xs">INSERTAR </button>
    <?php 
     echo form_close();
    ?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Nota</th>
      <th scope="col">Modificar</th>
       <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

<?php
$indice=1;
foreach ($estudiantesa->result() as $row) {
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->pApellido; ?></td>
      <td><?php echo $row->sAplellido; ?></td>
      <td><?php echo $row->Nota; ?></td>
      
      <td>
         <?php
          echo form_open_multipart('estudiante1/modificar1');
          ?>
          <input type="hidden" name="idEstudianteA" value="<?php echo $row->idEstudiante; ?>">
          <button type="submit" class="btn btn-secondary btn-xs">Modificar</button>
        <?php 
           echo form_close();
         ?>
       </td>

       <td>

       <?php
          echo form_open_multipart('estudiante1/ILIMINARBD1');
        ?>
          <input type="hidden" name="idEstudiante" value="<?php echo $row->idEstudiante; ?>">
          <button type="submit" class="btn btn-danger btn-xs">ILIMINAR</button>
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