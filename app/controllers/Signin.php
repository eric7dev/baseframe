<?php

# USER SIGNIN CONTROLLER

class Signin extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require_once "../app/views/p_signin.phtml";
  }
}

new Signin;

?>
