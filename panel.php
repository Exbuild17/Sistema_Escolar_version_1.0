<?php
session_start();
//Verificamos si el usuario inicio sesión

if(!isset($_SESSION['usuario'])){

header("Location:login.php");

}
?>

<!DOCTYPE html>
<html>

    <head>
<title>Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
<h2>Panel del Sistema Escolar</h2>
<a href="registro_alumno.php" class="btn btn-primary">Registrar Alumno</a>
<a href="registro_docente.php" class="btn btn-secondary">Registrar Docente</a>
<a href="listar_alumno.php" class="btn btn-info">Ver Alumno</a>
<a href="listar_docente.php" class="btn btn-warning">Ver Docentes</a>
<a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>

</body>
</html>
