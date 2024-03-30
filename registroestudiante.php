<?php
require ('cabecera.php')
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h1>Formulario Registro Estudiantes</h1>
      </div><!-- /.container-fluid -->
      <div class="col-md-8">
            <!-- general form elements -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Datos del Estudiante</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombres del Estudiante">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="apellido" placeholder="Apellidos del Estudiante">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Identificacion</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="identificacion" placeholder="Número de identificación">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Curso</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="curso" placeholder="Curso del Estudiante">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Registrar</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
    </section>
    <!-- /.content -->
  </div>

<?php
require ('pie.php')
?>
