<?php
include("conexion.php");

$sql = "SELECT*FROM alumnos";
$resultado =mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Listar Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h2>Lista de Alumnos</h2>
<table class="table">
    <tr>
        <tr>ID</tr>
        <tr>Nombre</tr>
        <tr>Apellido</tr>
        <tr>Direccion</tr>
        <tr>Telefono</tr>
        <tr>Año</tr>
    </tr>
<?php while($fila=mysqli_fetch_array($resultado)){?>

<tr>
    <td><?php echo $fila['id'];?></td>
    <td><?php echo $fila['nombre_alumno'];?></td>
    <td><?php echo $fila['apellido_alumno'];?></td>
    <td><?php echo $fila['direccion_alumno'];?></td>
    <td><?php echo $fila['telefono_alumno'];?></td>
    <td><?php echo $fila['anio_escolar'];?></td>

</tr>

<?php} ?>
</table>
</body>
</html>