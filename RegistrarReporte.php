<?php
require ('cabecera.php')
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h1>Formulario Registro Reportes</h1>
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
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sede</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="sede" placeholder="Sede Educativa">
                    </div>
                  </div>
              <!-- /.Información del Reporte -->
              <div class="card-header">
                <h3 class="card-title">Información del Reporte</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="nombre" placeholder="Nombres del Estudiante">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="clasificacion" class="col-sm-2 col-form-label">Clasificación</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="text" class="form-control" multiple name ="clasificacion" id="clasificacion" list=opcionesclasificacion placeholder="Académico" style="width: 100%;">
                                     <datalist id="opcionesclasificacion" style="width: 100%;">
                                        <option>Académico</option>
                                        <option>CI Leve</option>
                                        <option>CI Grave</option>
                                        <option>CI Gravísimo</option>
                                        <option>S Tipo I</option>
                                        <option>S Tipo II</option>
                                        <option>S Tipo III</option>
                                      </datalist>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Remisión</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                          <input type="text" class="form-control" multiple name ="remision" id="remision" list=opcionesremision placeholder="Orientación" style="width: 100%;">
                                     <datalist id="opcionesremision" style="width: 100%;">
                                        <option>Orientación</option>
                                        <option>Coordinación</option>
                                        <option>Rectoría</option>
                                      </datalist>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Evidencia, Elige un archivo PDF</label>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input type="file" class="form-control" id="file" name="file" accept=".pdf" style="width: 100%;">
                        </div>
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
