<?php 
require_once("conexion.php");
$venta = array();
$p="<td>";
$p2="</td>";
$patron = $_POST['codigo'];
$sql= "SELECT * FROM productos WHERE codigo = $_POST[codigo]";//41789001864
$result= mysqli_query($conn,$sql);
$c=mysqli_num_rows($result);
 while ($registros=mysqli_fetch_assoc($result)) {
   	echo "<tr>";
   	echo $p.$registros["codigo"].$p2.$p.$registros['descripcion'].$p2.$p.$registros['precioVenta'].$p2;
   	echo "</tr>";
   	$producto = array($registros["codigo"],$registros['descripcion'],$registros['precioVenta']);
   	//echo "producto registrado query".$producto[0];
   }
   $venta = $producto;
   //echo "Primer producto de venta: ".$venta[2] ;
   $total=0;
   $total=$venta[2] + $producto[2];
   
?>   
