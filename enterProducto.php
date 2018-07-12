<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device - widht, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="js" type="text/css" href="bootstrap4\css\bootstrap.min.js">

</head>
<body>
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
<div class="container">
	<form action="enterProducto.php" method="post" class="">
		<div class="form-group">
			<label>Codigo del producto</label>
			<input type="text" name="codigo" class="form-control" placeholder="Codigo del producto" autofocus>
		</div>
		<input type="submit" name="submit" value="Modificar" class="btn btn-primary">
	</form>
</div>
<!--
AL INGRESAR EL CODIGO DEBE
CONSULTAR LA BASE DE DATOS
   SI EXISTE DEBE MOSTRAR LOS CAMPOS QUE HA CARGADO EN EL FORMULARIO

   SI NO DEBE MOSTRAR UNA VENTANA QUE DIGO 'NO EXITE' 
 -->
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
//checar donde se cierra la conexion de la base de datos	

}
?>