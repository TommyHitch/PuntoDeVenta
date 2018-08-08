<?php 
require_once("conexion.php");
$venta = array();

$numeroAuxiliar = array('0.0','0.0','0.0');
global $numeroAuxiliar;
$numeroAuxiliar[0]=0.0;
$p="<td>";
$p2="</td>";
$code=0; $describe = ""; $price=0;

if(isset($_POST['codigo'])){
$patron = $_POST['codigo'];
$sql= "SELECT * FROM productos WHERE codigo = $_POST[codigo]";//41789001864
$result= mysqli_query($conn,$sql);
$c=mysqli_num_rows($result);
$file="venta.txt";

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
   asignaValores($band,$token);
   
   echo "<td>".$token."</td>";
   $token = strtok(",");
   $band++;
}
echo "</tr>";
}

//Asigna el precio del producto
function asignaValores($opcion,$valor){
   
if ($opcion == 2) {
$temp = floatval($valor);
$numeroAuxiliar[]=$temp;
ponValorCookie($temp);
//print_r($numeroAuxiliar);-----------------
}
}

function imprimeArreglo($numeroAuxiliar){
$lenght=count($numeroAuxiliar);
for ($i=0; $i < $lenght; $i++) { 
   echo "$numeroAuxiliar[$i]"."<br>";
}
}

function sumaCuenta(){
   $fp = fopen("total.txt", "r+");
$counter = fgets($fp);
//echo $counter;
$numero1=floatval($counter);
$numero2=floatval($valor);
echo "numero1: "."$numero1"."+"."$numero2"."<br>";
$suma = $numero2 + $numero1;
rewind($fp);
fputs($fp, $suma);
fclose($fp);
}

function ponValorCookie($valor){

$nombre="suma";
setcookie($nombre,$valor,time()+ (86400 * 30), "/");

}



$fp = fopen($file, "a+");
 while ($registros=mysqli_fetch_assoc($result)) {
   	//echo "<tr>";
   	//echo $p.$registros["codigo"].$p2.$p.$registros['descripcion'].$p2.$p.$registros['precioVenta'].$p2;
   	//echo "</tr>";
   	
      $producto = array($registros["codigo"],$registros['descripcion'],$registros['precioVenta']);
   	      
      fputs($fp, $registros["codigo"].",".$registros['descripcion'].",".$registros['precioVenta']."\n");
   }

   //Agregar productos a un arreglo para sumar los precios
   //calculando el tamaño del arreglo
   rewind($fp);
   
   ImprimeVenta($fp);
   
   
   //hacer clic comprar 
   


   fclose($fp);
   }

   //PRIMERO GUARDAMOS EL ARTICULO EN LA LISTA DE VENTA
   //DESPUES LEEMOS EL ARCHIVO CON TODOS LOS ARTICULOS
   //SUMAMOS LOS VALORES 
   //VACIAMOS EL ARCHIVO DESPUES DE PAGAR LA CUENTA
mysqli_close($conn);
?>   

