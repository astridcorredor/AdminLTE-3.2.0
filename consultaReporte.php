<?php include("cabecera.php"); ?>
<?php
require("conexion.php");
$conexion = retornarConexion();

  $registros = mysqli_query($conexion, "select *  from reportes") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>

<a href="RegistrarReporte.php"><button type="submit" class="btn btn-primary">Nuevo Reporte</button></a>
<br><br>
<table class="table table-hover table-striped table-bordered display" id="tablareporte">
    <thead>
        <tr>
            <th>Identificación</th>
            <th>Fecha</th>
            <th>Clasificacion</th>
            <th>Remisión</th>
            <th>Archivo</th>
            <th>Acciones</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php
  while ($reg = mysqli_fetch_array($registros)) { ?>
  <tr>
    <td> <?php echo $reg['identificacion'] ; ?> </td>
    <td> <?php echo $reg['fecha'] ; ?> </td>
    <td> <?php echo $reg['clasificacion'] ; ?> </td>
    <td> <?php echo $reg['remision'] ; ?> </td>
    <td> <?php echo $reg['archivo'] ; ?> </td>
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
    $('#tablareporte').DataTable();
    } );
  </script>
  <?php include("pie.php"); ?>