<?php

# HOME CONTROLLER

class Home extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require "../app/views/p_home.phtml";
  }

}

new Home;

?>
