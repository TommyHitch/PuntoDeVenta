<?php 
require_once("conexion.php");
// *************************************************************************************************************
$p="<td>";
$p2="</td>";
$file="venta.txt";
// *************************************************************************************************************
if(isset($_POST['codigo'])){
$patron = $_POST['codigo'];

$sql= "SELECT * FROM productos WHERE codigo = $_POST[codigo]";//41789001864
$result= mysqli_query($conn,$sql);

//funcion que guarda el valor del producto y lo va sumando en un archivo
function sumaCuenta($precio){
$fp = fopen("total.txt", "r+");
$cuenta = fgets($fp, 7);
echo "cuenta en el documento: ".$cuenta."<br>"; 
echo "precio recibido: ".$precio."<br>";
$cuenta = floatval($cuenta) + floatval($precio);
echo "suma: ".$cuenta;
rewind($fp);
fputs($fp, $cuenta);
fclose($fp);
}

//funcion que imprime el archivo venta.txt
function ImprimeVenta($fp){
while(!feof($fp)){   
   //echo fgets($fp)."<br>";
   separandoInfo(fgets($fp));
   //echo "<br>";
   
  }
}
//funcion que separa la info del registro dividido por comas
function separandoInfo($linea){
$token = strtok($linea,",");
$band=0;

echo "<tr>";
while ($token !== false) {
      
   echo "<td>".$token."</td>";
   $token = strtok(",");
   $band++;
}
echo "</tr>";
}


$fp = fopen($file, "a+");

 while ($registros=mysqli_fetch_assoc($result)) {  	      
      sumaCuenta($registros['precioVenta']);        	      
      fputs($fp, $registros["codigo"].",".$registros['descripcion'].",".$registros['precioVenta']."\n");
   }
   
   rewind($fp);
   ImprimeVenta($fp);
   fclose($fp);
   }
mysqli_close($conn);
?>   

