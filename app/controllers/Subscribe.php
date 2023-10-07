<?php

# SUBSCRIBE CONTROLLER

class Subscribe extends Controller {

  function __construct() {
    $d = $_POST["email"]."\n";
    $file = fopen( 'subscribers.csv', 'a' );
    fwrite( $file, $d );
    fclose( $file );
    header( "Location: /index.php" );
    die();
  }
}

new Subscribe;

?>
