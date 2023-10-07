<?php
$hit = $_SERVER['REMOTE_ADDR']."@".$_SERVER['HTTP_USER_AGENT']."\n";
file_put_contents(".log.db", $hit, FILE_APPEND | LOCK_EX);
?>
