<?php

# LOGOUT CONTROLLER

class Logout extends App {

  function __construct() {
    $this->index();
    session_destroy();
  }

  function index() {
    require_once "../app/views/p_logout.phtml";
  }

}

new Logout;

?>
