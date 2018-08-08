<!DOCTYPE html>
<html>
<head>
	<title>Punto de Venta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilosPuntoVenta.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="bootstrap4\js\bootstrap.min.js"></script>
	
</head>
<body class="container">
<div class="row encabezado">	
     <h1>Modificar producto</h1>
</div>

<nav class="row nav navbar-tabs ">
<?php include "menus/menuPrincipal.php";?> 
	
</nav>
<nav class="row nav nav-tabs nav-justified">
<?php include "menus/menuProductos.php"; ?>
</nav>
<div class="row pantalla">
  <div id="" class="container">
	
  </div>

  <div class="container" id="pantalla"> 
     <?php include "insertaCodigo.php";?>
  </div>
  <div id="cobro" class="container">
  </div>
</div>
<div class="row " id="footer">	
<?php include "footer.php"; ?>
</div>
</body>
</html>
<?php 
require_once('conexion.php');	
if (isset($_POST['codigo'])) {
	$codigo = $_POST['codigo'];
$sql = "SELECT * FROM productos WHERE codigo = $codigo";
$result= mysqli_query($conn,$sql);
$c=mysqli_num_rows($result);
$registro=mysqli_fetch_assoc($result);
//hay que enviar esta variable al archivo modificarProducto.php
print_r($registro);
echo $registro['codigo'];
//checar donde se cierra la conexion de la base de datos	
session_start();
$_SESSION['productoParaModificar']=$registro;
//reedirigir con javascript
 echo "<script> window.location='modificarProducto.php'; </script>";
}


?>