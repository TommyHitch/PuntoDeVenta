<!DOCTYPE html>
<html>
<head>
	<title>Cobrar</title>
	<meta charset="utf-8">	
	<meta name="view-port" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilosPuntoVenta.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="bootstrap4\js\bootstrap.min.js"></script>
</head>
<body class="container">

<div class="row">
	
</div>
<div class="row">
<form action="cobrar.php" method="post">
	<div class="form-group">
	<label class="">Cantidad: </label> 
	<input type="text" name="efectivo" class="form-control">
    </div>
	<input type="submit" name="pagar" value="Pagar" class="btn btn-primary">
</form>
</div>
</body>

</html>
<?php
function vaciarVenta(){
$fp = fopen("venta.txt", "w+");
fclose($fp);
} 
function vaciarTotal(){
	$fp = fopen("total.txt", "w+");
	$cero = floatval("0.000");
	fputs($fp, $cero);
fclose($fp);
}
function leeTotal(){
	   $fp = fopen("total.txt", "r+");
$counter = fgets($fp);
$total = floatval($counter);
fclose($fp);
return $total;
}
if (isset($_POST['efectivo'])) {
	//HAY QUE RECIBIR POR EL LINK LA CANTIDAD A PAGAR
$efectivo = $_POST['efectivo'];
$cuenta = leeTotal();
$band=0;
//restar la cuenta al efectivo
if ($efectivo>=$cuenta) {
	$cambio = $cuenta - $efectivo;
    echo "<h2>Cambio: $cambio</h2>";
    vaciarTotal();
    vaciarVenta();
    header('Location: index.php');    
}else{
	echo "La cantidad es menor al total a pagar!";
}
//vaciar la lista de productos de la venta realizada.
//regresar a index.php

}
?>