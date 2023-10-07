<?php
$d = "true";
setcookie("visited", $d, time()+30, "/","",0);

$d = $_GET[d]."\n";
echo $d;

$file = fopen('counter', 'a');
fwrite($file, $d);
fclose($file);

header('Location: /index.php');
die();
?>
