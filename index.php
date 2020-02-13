<? 
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
 echo "la pagina $site esta online"; 
 } 
 else { 
 echo "la pagina $site esta caida"; 
 } 

 ?>
