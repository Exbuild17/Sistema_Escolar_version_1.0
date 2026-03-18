<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body class="container mt-5">
<h2>Inicio de Sesion</h2>
<form method="POST">
    
   <input type="mail" name="correo" class="form-control mb-3" placeholder="correo">
    <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña">

<button class="btn btn-success">Ingresar</button>

</form>
</body>
    </html>
<?php
include("conexion.php");
if(isset($_POST['correo'])){
$correo = $_POST['correo'];
$password =$_POST['password'];
$sql = "SELECT*FROM usuarios where correo = '$correo' AND password = '$password'";

$resultado = mysqli_query($conexion,$sql); 

if(mysqli_num_rows($resultado)>0){
$_SESSION['usuario']=$correo;

header("Location:panel.php");
}else{
   echo"Datos Incorrectos"; 
}
}
?>