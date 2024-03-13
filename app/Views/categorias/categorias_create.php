<?php  include_once("../app/Views/plantillas/comun.php");  ?>

<?php
$titulo ="Crear Categoria";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>POS API - <?= $titulo; ?> </title>
  <?php  include_once("../app/Views/plantillas/head.php");  ?>
  
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php  include_once("../app/Views/plantillas/header.php");  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container --> 
  <?php  include_once("../app/Views/plantillas/aside.php");  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <?= $titulo; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active"><?= $titulo; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!--CONTENIDO DE ESTA PÁGINA -->

       <!-- /.card -->
        
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editando producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="/categoria/store/" method="POST">
                <div class="card-body">

                  <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" value="" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Estado</label>
                    <input name="estado" value="" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Imagen</label>
                    <input name="imagen" value="" type="text" class="form-control">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          <!--FIN CONTENIDO DE ESTA PÁGINA -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php  include_once("../app/Views/plantillas/footer.php");  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php  include_once("../app/Views/plantillas/scripts.php");  ?>


</body>
</html>
