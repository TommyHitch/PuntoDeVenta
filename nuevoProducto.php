<?php
// 
$codigo = $descripcion = $precioCosto = $precioVenta = $precioMayoreo = $departemento = $inventario = $inventarioMin= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST["codigo"]))	{
	$codigo = test_input($_POST["codigo"]);
}else{
	echo "CAMPO REQUERIDO";
}
if (isset($_POST["descripcion"])) {
  	$descripcion = test_input($_POST["descripcion"]);
  }else{

  }  
if (isset($_POST["pcosto"])) {
  	$precioCosto = test_input($_POST["pcosto"]);
  }else{
  	echo "CAMPO REQUERIDO";
  }
if (isset($_POST["pventa"])) {
  	$precioVenta = test_input($_POST["pventa"]);
  }else{
  	echo "CAMPO REQUERIDO";
  }
if (isset($_POST["pmayoreo"])) {
  	$precioMayoreo = test_input($_POST["pmayoreo"]);
  }else{
  	$precioMayoreo = NULL;
  }
if (isset($_POST["departemento"])) {
  	$departemento = test_input($_POST["departemento"]);
  }else{
  	echo "CAMPO REQUERIDO";
  }
if (isset($_POST["invenstario"])) {
  	$inventario = test_input($_POST["invenstario"]);
  }else{
  	echo "CAMPO REQUERIDO";
  }
if (isset($_POST["invenstarioMin"])) {
  	$inventarioMin = test_input($_POST["invenstarioMin"]);
  }else{
  	$inventarioMin = NULL;
  }
require_once("conexion.php");  

$sql = "INSERT INTO productos (codigo, descripcion, precioCosto,precioVenta,precioMayoreo,Inventario,invMinimo,Departamento)
VALUES ('$codigo','$descripcion','$precioCosto','$precioVenta','$precioMayoreo','$departemento','$inventario','$inventarioMin')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
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
header('Location: index.php');  

  ?>