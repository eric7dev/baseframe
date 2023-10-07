<?php

# ERROR CONTROLLER

class Error extends Controller {

  $ERROR_CODE=$_GET['url'];

  function __construct() {
    $this->load_error($ERROR_CODE);
    session_destroy();
  }

  function load_error( $errorcode ) {
    if ( $errorcode == 404 ) {
      echo "Error code # ".$errorcode."! ~ Page Not Found. (".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].")";
    } elseif ( $errorcode == 403 ) {
      echo "Error code # ".$errorcode."! ~ Page Is Forbidden, Event Has Been Logged. (".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].")";
      # TODO LOG EVENT
    } elseif ( $errorcode == 401 ) {
      echo "Error code # ".$errorcode."! ~ Unauthorized! Event Has Been Logged. (".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].")";
      # TODO LOG EVENT
    } else {
      echo "Error code # ".$ERROR_CODE."! ~ undefined";
    }
  }
}

new Error;

?>
