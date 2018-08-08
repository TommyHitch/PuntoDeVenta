<?php 
session_start();
$_SESSION['usuario']=$_POST['user'];
$_SESSION['contrasena']=$_POST['password'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Punto de Venta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilosPuntoVenta.css">
	<script type="text/javascript" src="bootstrap4\js\bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
<div class="">
	
</div>	
	<h1>Login</h1>
<form action="login.php" method="post">
	<div class="form-group">
	     <label>Usuario:</label>	
	     <input type="" name="user" class="form-control">
    </div>
	<div class="form-group">
	     <label>Contraseña: </label>
	     <input type="" name="password" class="form-control">
    <div class="form-group">
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="submit" value="Entrar">
    </div>
</form>
<div class="panel-footer">
	Programa punto de venta info: 222 102  38 45 
</div>
</div>
</body>
</html>