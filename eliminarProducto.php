<!DOCTYPE html>
<html>
<head>
	<title>Punto de Venta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilosPuntoVenta.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="bootstrap4\js\bootstrap.min.js"></script>

</head>
<body class="container">
<div class="row">	
	<h1>Eliminar Producto</h1>
</div>
<nav class="nav navbar-tabs">
	<?php include "menus/menuPrincipal.php"; ?>
</nav>
<nav class="nav navbar-tabs">
	<?php include "menus/menuProductos.php"; ?>
</nav>
  <div class="container" id="pantalla"> 
     <?php include "insertaCodigo.php";?>
  </div>
<div class="row">
	<?php include "footer.php" ;?>
</div>
</body>
</html>
<?php 
require_once('conexion.php');	
if (isset($_POST['codigo'])) {
	$codigo = $_POST['codigo'];
$sql = "DELETE FROM productos WHERE codigo = $codigo";
//$result= mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
    echo "eL REGISTRO SE ELIMINO EXITOSAMENTE";
} else {
    echo "ERROR AL ELIMINAR REGISTRO: " . mysqli_error($conn);
}
}
mysqli_close($conn);

?>