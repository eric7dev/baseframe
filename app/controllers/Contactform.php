<?php

# CONTACTFORM CONTROLLER

class Contactform extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require_once "../app/views/p_contactform.phtml";
  }
}

new Contactform;

?>
