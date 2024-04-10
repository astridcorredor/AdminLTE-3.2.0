<?php
  require ('cabecera.php');
?> 
<?php
require("conexion.php");
$conexion = retornarConexion();

  $registros = mysqli_query($conexion, "select *  from estudiantes") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h1>Consultar Estudiantes</h1>
        <a href="insertar.php"><button type="submit" class="btn btn-primary">Nuevo Registro</button></a>
        <br><br>
        <table class="table table-hover table-striped table-bordered display" id="tablausu">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Identificación</th>
                    <th>Curso</th>
                    <th>Sede</th>
            </thead>
  <tbody>
<?php
  while ($reg = mysqli_fetch_array($registros)) { ?>
  <tr>
    <td> <?php echo $reg['nombre'] ; ?> </td>
    <td> <?php echo $reg['apellido'] ; ?> </td>
    <td> <?php echo $reg['identificacion'] ; ?> </td>
    <td> <?php echo $reg['curso'] ; ?> </td>
    <td> <?php echo $reg['sede'] ; ?> </td>
    <td> <button type="submit" class="btn btn-success">Editar</button></td>
    <td> <button type="submit" class="btn btn-danger">Eliminar</button></td>
   <?php
  } 
  ?>
    </tr>
    <?php
  mysqli_close($conexion);
  ?>
  </tbody>
  </table>
  <script>
    $(document).ready( function () {
    $('#tablausu').DataTable();
    } );
  </script>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
  require ('pie.php');
?> 
