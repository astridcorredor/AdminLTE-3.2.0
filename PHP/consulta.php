<?php include("vista/cabecera.php"); ?>
<?php
require("conexion.php");
$conexion = retornarConexion();

  $registros = mysqli_query($conexion, "select * from usuario") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>

<a href="insertar.php"><button type="submit" class="btn btn-primary">Nuevo Registro</button></a>
<br><br>
<table class="table table-hover table-striped table-bordered display" id="tablausu">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Identificación</th>
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
    <td> <?php echo $reg['ide'] ; ?> </td>
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
  <?php include("vista/pie.php"); ?>