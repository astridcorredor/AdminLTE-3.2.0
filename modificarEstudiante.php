<?php
  require ('cabecera.php');
?> 
<?php
require("conexion.php");
$conexion = retornarConexion();

$registros = mysqli_query($conexion, "select codigo, nombre, apellido, identificacion, curso, sede from estudiantes where codigo='$_REQUEST[codigo]'") or
die("Problemas en el select:" . mysqli_error($conexion));
 
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h1>Formulario para Modificación de Estudiantes</h1>
      </div><!-- /.container-fluid -->
      <div class="col-md-8">
            <!-- general form elements -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Actualización de Datos del Estudiante</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="actualizarEstudiante.php" method="post">
              <?php
                if ($reg = mysqli_fetch_array($registros)) { ?>
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Codigo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="codigo" placeholder="Codigo del Estudiante" name="codigo" value="<?php echo $reg['codigo'] ; ?> ">
                    </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombres del Estudiante" name="nombre" value="<?php echo $reg['nombre'] ; ?> ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="apellido" placeholder="Apellidos del Estudiante" name="apellido" value="<?php echo $reg['apellido'] ; ?> ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Identificacion</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="identificacion" placeholder="Número de identificación" name="identificacion" value="<?php echo $reg['identificacion'] ; ?> ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Curso</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="curso" placeholder="Curso del Estudiante" name="curso" value="<?php echo $reg['curso'] ; ?> ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sede</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="sede" placeholder="Sede Educativa" name="sede" value="<?php echo $reg['sede'] ; ?> ">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                                <!-- /.card-footer -->
                <?php   }  ?>
              </form>
            </div>
            <!-- /.card -->

          </div>
    </section>
    <!-- /.content -->

<?php
  require ('pie.php');
?> 