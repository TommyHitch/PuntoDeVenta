<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="js" type="text/css" href="bootstrap4\css\bootstrap.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
<h1>Punto de venta</h1>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">

	<ul class="navbar-nav">
	<li class="nav-item">
		<a class=" active nav-link" href="index.php"><i class="fa fa-home"></i></a>
	</li>	
	<li class="nav-item">
		<a class="nav-link active" href="">Ventas</a>
	</li>	
	<li class="nav-item">
	<a class="nav-link" href="">Clientes</a>
    </li>
    <li class="nav-item">
	<a class="nav-link" href="productos.php">Productos</a>
    </li>
	<li class="nav-item">
	<a class="nav-link" href="">Inventario</a>
     </li>
    </ul>
</nav>
<div>
	<form action="index.php" method="post">
		Codigo del producto 
		<input type="text" name="codigo" autofocus="active">
		<input type="submit" name="agregar" value="ENTER- Agregar producto">
	</form>
</div>
<div class="container table-responsive"> 
	<h2>Pantalla donde se lista los producto</h2>
	
	<table class="table">
	 <tr>
    <th>Codigo</th>
    <th>Descripcion</th>
    <th>PrecioVenta</th>
     </tr>
     <?php include('buscar_producto.php'); ?>
	</table>
	
     <h2>Total a pagar: <?php if(isset($total))echo $total ?></h2>
  
</div>
<div>
		<form action="cobrar.php" method="post">
		
		<input type="submit" name="cobrar" class="btn btn-primary" value="cobrar">
		<?php 
		//Tiene que llamar a una ventana que muestre otro formulario donde se ingrese la cantidad, la reste y se vea el cambio. Al finalizar debe limpiar la lista. 

		?>
	    </form>
	</div>
<div class="container">	
<footer class="panel panel-footer">
	<p>Punto de venta </p>
	<p>Para mayor informacion: 227 101 71 85</p>
</footer>
</div>
</body>
</html>