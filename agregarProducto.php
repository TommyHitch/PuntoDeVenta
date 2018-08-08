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
	<h1>Agregar Producto</h1>
</div>
<nav class="row nav navbar-tabs ">
<?php include "menus/menuPrincipal.php"; ?>
</nav>
<nav class="row nav nav-tabs nav-justified">
<?php include "menus/menuProductos.php"; ?>
</nav>

<div class="row">
<form action="nuevoProducto.php" method="post" class="col-sm-12">
	<div class="input-group">
		
		     <span class="input-group-text col-sm-2">Codigo:</span>
	    
		<input type="text" name="codigo" class="form-control" autofocus>
	</div>
	<div class="input-group">
		
		     <span class="input-group-text col-sm-2">Descripcion:</span>
	    
		<input type="text" name="descripcion" class="form-control">
	</div>
	<div class="input-group">
		
		     <span class="input-group-text col-sm-2">Precio costo:</span>
	    
		<input type="text" name="pcosto" class="form-control">
	</div>
	<div class="input-group">
		
		     <span class="input-group-text col-sm-2">Precio a la venta</span>
	    
		<input type="text" name="pventa" class="form-control">
	</div>
	<div class="input-group">
		
		     <span class="input-group-text col-sm-2">Precio a mayoreo:</span>
	    
		<input type="text" name="pmayoreo" class="form-control">
	</div>
	<div class="input-group">
		
		     <span class="input-group-text col-sm-2">Departamento:</span>
	    
		<input type="text" name="departento" class="form-control">
	</div>
	<div class="input-group">
		
		     <span class="input-group-text col-sm-2">Eliminar:</span>
	    
		<input type="text" name="inventario" class="form-control">
	</div>
	<div class="input-group ">
		
		     <span class="input-group-text col-sm-2">Inventario minimo:</span>
		
		<input type="text" name="inventarioMin" class="form-control">

	</div>

	<input type="submit" name="submit" value="Registrar" class="btn btn-primary">
</form>
</div>
<div class="row " id="footer">	
<?php include "footer.php"; ?>
</div>

</body>
</html>