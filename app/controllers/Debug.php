<?php

# DEBUG CONTROLLER

class Debug {

  function __construct() {
    debuginfo();
    phpinfo();
  }

}

function debuginfo() {
  echo "<h1>DEBUG INFO</h1>";
  echo "<b>WORKING DIRECTORY:</b><br/>";
  echo getcwd();
  echo "<br/><br/>";
  echo "<b>\$_SERVER['REDIRECT_STATUS']:</b><br/>";
  $http_response=$_SERVER['REDIRECT_STATUS'] ?? "200";
  print_r($http_response);
  echo "<br/><br/>";
  echo "<b>\$_SERVER['REQUEST_URI']:</b><br/>";
  print_r($_SERVER['REQUEST_URI']);
  echo "<br/><br/>";
  echo "<b>\$_GET:</b><br/>";
  print_r($_GET);
  echo "<br/><br/>";
  echo "<b>\$_SESSION:</b><br/>";
  print_r($_SESSION);
  echo "<br/><br/>";
  echo "<b>\$_SERVER:</b><br/>";
  print_r($_SERVER);
  echo "<br/><br/>";
}

new Debug;

?>
