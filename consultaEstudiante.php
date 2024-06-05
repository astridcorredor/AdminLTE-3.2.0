<?php
  require ('cabecera.php');
?> 
<?php
require("conexion.php");
$conexion = retornarConexion();

if ($_POST){
  $codigo=$_POST['codigo'];
  $evento=$_POST['evento'];

  switch ($evento) {
    case 'borrar':
      $registros = mysqli_query($conexion, "delete from estudiantes where codigo=$codigo");
      break;
    
      
    
    default:
     echo "No se encuentra el metodo";
      break;
  }
}
  $registros = mysqli_query($conexion, "select * from estudiantes") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h1>Consultar Estudiantes</h1>
        <a href="RegistrarEstudiante.php"><button type="submit" class="btn btn-primary">Nuevo Registro</button></a>
        <br><br>
        <table class="table table-hover table-striped table-bordered display" id="tablaestudiantes">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Identificación</th>
                    <th>Curso</th>
                    <th>Sede</th>
                    <th>Acciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
  <tbody>
<?php
  while ($reg = mysqli_fetch_array($registros)) { ?>
  <tr>
    <td> <?php echo $reg['codigo'] ; ?> </td>
    <td> <?php echo $reg['nombre'] ; ?> </td>
    <td> <?php echo $reg['apellido'] ; ?> </td>
    <td> <?php echo $reg['identificacion'] ; ?> </td>
    <td> <?php echo $reg['curso'] ; ?> </td>
    <td> <?php echo $reg['sede'] ; ?> </td>
    <td>  <form action="modificarEstudiante.php" method="post">
            <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ; ?>">  
            <button type="submit" class="btn btn-success">Editar</button>
            </form>
          </td>
    <td> <form action="" method="post"> 
        <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ; ?>">  
        <button type="submit" class="btn btn-danger" name="evento" value="borrar">Eliminar</button>
        </form>
      </td>
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
    $('#tablaestudiantes').DataTable();
    } );
  </script>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
  require ('pie.php');
?> 
