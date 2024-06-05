<?php
  require ('cabecera.php');
?> 
<?php
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$apellido=(isset($_POST['apellido']))?$_POST['apellido']:"";
$identificacion=(isset($_POST['identificacion']))?$_POST['identificacion']:"";
$curso=(isset($_POST['curso']))?$_POST['curso']:"";
$sede=(isset($_POST['sede']))?$_POST['sede']:"";
require("conexion.php");
$conexion = retornarConexion();
 
    $respuesta =mysqli_query($conexion," UPDATE estudiantes SET `nombre`='$nombre',`apellido`='$apellido', `identificacion`='$identificacion', `curso`='$curso', `sede`='$sede' WHERE codigo=$codigo");   

//header ("location:consulta.php");
echo "Registro Actualizado!"

?>

<?php
  require ('pie.php');
?> 
