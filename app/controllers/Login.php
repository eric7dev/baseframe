<?php

# USER LOGIN CONTROLLER

class Login extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require_once "../app/views/p_login.phtml";
  }
}

new Login;

?>
