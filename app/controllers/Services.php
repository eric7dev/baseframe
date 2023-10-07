<?php

# SERVICES PAGE CONTROLLER

class Services {
  
  function __construct() {
    $this->index();
  }

  function index() {

    require "../app/views/p_services.phtml";
  }

}

new Services;

?>
