<?php  include_once("../app/Views/plantillas/comun.php");  ?>

<?php
$titulo ="Productos";
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

       <div class="col-12 card">
              <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Nombre</th>
                      <th>Imagen</th>
                      <th style="width: 40px">Precio</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php foreach ($productos as $i => $producto) {  ?>    
                    <tr>
                      <td><?= $producto["id"]; ?> </td>
                      <td><?= $producto["nombre"]; ?> </td>
                      <td>
                        <img style="width:50px;" src="<?= $producto['imagen']; ?>" />
                      </td>
                        <td>$<?= $producto['precio']; ?></td>
                      <td>
                        <a href="/producto/<?= $producto["id"]; ?>/edit" class="btn-sm btn-dark"><i class="fa fa-solid fa-pen"></i> Editar</a>
                        <button onClick="eliminar(<?= $producto['id']; ?>);" class="btn-sm btn-danger"><i class="fa fa-solid fa-trash"></i> Eliminar</button>
                    </tr>
                 <?php }  ?>
                    


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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

<script>
    
    function eliminar(id) {
        Swal.fire({
  title: "Estas seguro?",
  text: "El producto se eliminara para siempre!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Si, estoy seguro!"
}).then((result) => {
  if (result.isConfirmed) {
    location.href = "/producto/" + id + "/delete";
  }
});
    }

</script>

</body>
</html>
