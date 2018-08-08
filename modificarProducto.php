<!DOCTYPE html>
<html>
<head>
	<title>Registrar Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilosPuntoVenta.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="bootstrap4\js\bootstrap.min.js"></script>
</head>
<body class="container">
<div class="row">	
	<h1>Modificar Producto</h1>
</div>
<nav class="nav navbar-tabs">
	<?php include "menus/menuPrincipal.php"; ?>
</nav>	
<nav class="nav navbar-tabs">
<?php include "menus/menuProductos.php";?>
</nav>


<div class="row">
<form action="productoModificado.php" method="post" class="col-sm-12">
	<div class="input-group-prepend ">
		<span class="input-group-text col-sm-2">Codigo:</span>
		<input type="text" name="codigo" class="input-group" value="<?php session_start(); echo $_SESSION['productoParaModificar']['codigo']; ?>" autofocus>
	</div>
	<div class="input-group-prepend">
		<span class="input-group-text col-sm-2">Descripcion:</span>
		<input type="text" name="descripcion" class="input-group" value="<?php  echo $_SESSION['productoParaModificar']['descripcion']; ?>">
	</div>
	<div class="input-group-prepend">
		<span class="input-group-text col-sm-2">Precio costo:</span>
		<input type="text" name="pcosto" class="input-group" value="<?php  echo $_SESSION['productoParaModificar']['precioCosto']; ?>">
	</div>
	<div class="input-group-prepend">
		<span class="input-group-text col-sm-2">Precio a la venta</span>
		<input type="text" name="pventa" class="input-group" value="<?php  echo $_SESSION['productoParaModificar']['precioVenta']; ?>">
	</div>
	<div class="input-group-prepend">
		<span class="input-group-text col-sm-2">Precio a mayoreo:</span>
		<input type="text" name="pmayoreo" class="input-group" value="<?php  echo $_SESSION['productoParaModificar']['precioMayoreo']; ?>">
	</div>
	<div class="input-group-prepend">
		<span class="input-group-text col-sm-2">Inventario:</span>
		<input type="text" name="inventario" class="input-group" value="<?php  echo $_SESSION['productoParaModificar']['Inventario']; ?>">
	</div>
	<div class="input-group-prepend">
		<span class="input-group-text col-sm-2">Inventario minimo:</span>
		<input type="text" name="inventarioMin" class="input-group" value="<?php  echo $_SESSION['productoParaModificar']['InvMinimo']; ?>">
	</div>
	<div class="input-group-prepend">
		<span class="input-group-text col-sm-2">Departamento:</span>
		<input type="text" name="departemento" class="input-group" value="<?php  echo $_SESSION['productoParaModificar']['Departamento']; ?>">
	</div>

	<input type="submit" name="submit" value="Modificar" class="btn btn-primary" >
</form>
</div>
<div class="row " id="footer">	
<?php include "footer.php"; ?>
</div>
</body>
</html>