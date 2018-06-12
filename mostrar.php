<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

</head>
<body>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<table id="customers">	
	 <tr>
    <th>Codigo</th>
    <th>Descripcion</th>
    <th>PrecioCosto</th>
    <th>PrecioVenta</th>
    <th>PrecioMayoreo</th>
    <th>Inventario</th>
    <th>InvMinimo</th>
    <th>Departamento</th>
  </tr>
<?php	

$c=0;
$p="<td>";
$p2="</td>";
require_once("conexion.php");
$patron = "ABARROTES";
$sql= "SELECT * FROM indio WHERE Departamento = 'cuauthemoc_moctezuma'";
$result= mysqli_query($conn,$sql);
$c=mysqli_num_rows($result);
if($c>0){
	echo "Numero de registros: ".$c."<br>";
   while ($registros=mysqli_fetch_assoc($result)) {
   	echo "<tr>";
   	echo $p.$registros["codigo"].$p2.$p.$registros['descripcion'].$p2.$p.$registros['precioCosto'].$p2.$p.$registros['precioVenta'].$p2.$p.$registros['precioMayoreo'].$p2.$p.$registros['Inventario'].$p2.$p.$registros['InvMinimo'].$p2.$p.$registros['Departamento'].$p2;
   	echo "</tr>";
   }

}else{
	echo "No hay registros";
}
mysqli_close($conn);

?>
</table>
</body>
</html>