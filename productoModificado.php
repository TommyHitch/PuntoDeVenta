<?php
// 
$codigo = $descripcion = $precioCosto = $precioVenta = $precioMayoreo = $departemento = $inventario = $inventarioMin= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST["codigo"]))	{
	$codigo = test_input($_POST["codigo"]);
}else{
	echo "CODIGO REQUERIDO";
}
if (isset($_POST["descripcion"])) {
  	$descripcion = test_input($_POST["descripcion"]);
  }else{
    echo "DRESCRIPCION REQUERIDA";
  }  
if (isset($_POST["pcosto"])) {
  	$precioCosto = test_input($_POST["pcosto"]);
  }else{
  	echo "PRECIO COSTO REQUERIDO";
  }
if (isset($_POST["pventa"])) {
  	$precioVenta = test_input($_POST["pventa"]);
  }else{
  	echo "PRECIO VENTA REQUERIDO";
  }
if (isset($_POST["pmayoreo"])) {
  	$precioMayoreo = test_input($_POST["pmayoreo"]);
  }else{
  	$precioMayoreo = NULL;
  }
if (isset($_POST["departemento"])) {
  	$departemento = test_input($_POST["departemento"]);
  }else{
  	echo "DEPARTAMENTO REQUERIDO";
  }
if (isset($_POST["inventario"])) {
  	$inventario = test_input($_POST["inventario"]);
  }else{
  	echo "INVENTARIO REQUERIDO";
  }
if (isset($_POST["inventarioMin"])) {
  	$inventarioMin = test_input($_POST["inventarioMin"]);
  }else{
  	$inventarioMin = NULL;
  }
require_once("conexion.php");  

$sql = "UPDATE productos SET descripcion='$descripcion', precioCosto='$precioCosto', precioVenta='$precioVenta', precioMayoreo='$precioMayoreo', Inventario='$inventario', InvMinimo='$inventarioMin', Departamento='$departemento' WHERE codigo = '$codigo'";
//SET lastname='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Modificacion exitosa!";
    mysqli_close($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//header('Location: index.php');  

  ?>