
<?php
require ('cabecera.php')
?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Consulta de Estudiantes</h2>
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Sede:</label>
                                    <select class="select2" data-placeholder="Preescolar" style="width: 100%;">
                                        <option>Preescolar</option>
                                        <option>Primaria</option>
                                        <option>Bachillerato</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Ordenar:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>ASC</option>
                                        <option>DESC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Curso:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option>101</option>
                                        <option>102</option>
                                        <option>201</option>
                                        <option>202</option>
                                        <option>301</option>
                                        <option>302</option>
                                        <option>401</option>
                                        <option>402</option>
                                        <option>501</option>
                                        <option>502</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg" placeholder="Apellido del Estudiante" value="Apellido del Estudiante">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
  </div>

<?php
require ('pie.php')
?>
