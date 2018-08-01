<!DOCTYPE html>
<html>
<head>
	<title>Registrar Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<ul class="navbar-nav">
	<li class="nav-item">
		<a class=" active nav-link" href="index.php"><i class="fa fa-home"></i></a>
	</li>	
	<li class="nav-item">
		<a class="nav-link active" href="agregarProducto.php">Agregar Nuevo</a>
	</li>	
	<li class="nav-item">
	<a class="nav-link" href="">Modificar</a>
    </li>
    <li class="nav-item">
	<a class="nav-link" href="">menu1</a>
    </li>
	<li class="nav-item">
	<a class="nav-link" href="">menu2</a>
     </li>
    </ul>
</nav>
<div>	
	<h1>Modificar Producto</h1>
</div>
<form action="nuevoProducto.php" method="post">
	<div class="form-group">
		<label>Codigo:</label>
		<input type="text" name="codigo" class="form-control">
	</div>
	<div class="form-group">
		<label>Descripcion:</label>
		<input type="text" name="descripcion" class="form-control" value="<?php echo 'Shampoo natural 200ml';?>">
	</div>
	<div class="form-group">
		<label>Precio costo:</label>
		<input type="text" name="pcosto" class="form-control">
	</div>
	<div class="form-group">
		<label>Precio a la venta</label>
		<input type="text" name="pventa" class="form-control">
	</div>
	<div class="form-group">
		<label>Precio a mayoreo:</label>
		<input type="text" name="pmayoreo" class="form-control">
	</div>
	<div class="form-group">
		<label>Departamento:</label>
		<input type="text" name="departento" class="form-control">
	</div>
	<div class="form-group">
		<label>Inventario:</label>
		<input type="text" name="inventario" class="form-control">
	</div>
	<div class="form-group">
		<label>Inventario minimo:</label>
		<input type="text" name="inventarioMin" class="form-control">
	</div>

	<input type="submit" name="submit" value="Registrar" class="btn btn-primary">
</form>
</div>
</body>
</html>