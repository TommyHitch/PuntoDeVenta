<?php 
$nombre="suma";
$valor=0;
//setcookie($nombre,$valor,time()+ (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Punto de Venta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilosPuntoVenta.css">
	<link rel="js" type="text/css" href="bootstrap4\css\bootstrap.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body class="container">
<div class="row">	
     <h1>Punto de venta</h1>
</div>

<nav class="row nav navbar-tabs " id="menuPrincipal">
<?php include "menus/menuPrincipal.php";?>

</nav>
<nav class="row nav navbar-tabs " id="menuSecundario">

	<ul class="nav nav-tabs nav-justified">
	<li class="nav-item">
		<a class="nav-link" href=""> </a>
	</li>	
     
    </ul>
</nav>
<div class="">
<div id="formEntrada" class="row ">
	<form action="index.php" method="post">
		<div class="form-group col-sm-12">
		    <label> Codigo del producto <label>
		    <input class="col-sm-6" type="text" name="codigo" autofocus="active">    
		    <input class="btn btn-primary" type="submit" name="agregar" value="ENTER- Agregar producto">
		</div>
	</form>
</div>

<div class="row " id="pantalla"> 
	<h2>Pantalla donde se lista los producto</h2>
	
	<table class="table">
	 <tr>
    <th>Codigo</th>
    <th>Descripcion</th>
    <th>PrecioVenta</th>
     </tr>
     <?php include('buscar_producto.php'); ?>
	</table>
	
     <h2>Total a pagar: <?php 
$fp = fopen("total.txt", "r+");
$cuenta = fgets($fp, 7);
echo $cuenta;
rewind($fp);
fputs($fp, $cuenta);
fclose($fp);
?></h2>
  
</div>
<div id="cobro" class="row">
		<form action="cobrar.php" method="post">
		
		<input type="submit" name="cobrar" class="btn btn-primary" value="cobrar">
		<?php 
		//Tiene que llamar a una ventana que muestre otro formulario donde se ingrese la cantidad, la reste y se vea el cambio. Al finalizar debe limpiar la lista. 

		?>
	    </form>
	</div>
</div>
<div class="row " id="footer">	
<?php include "footer.php"; ?>
</div>
</body>
</html>