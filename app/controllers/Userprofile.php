<?php

# USER PROFILE CONTROLLER

class Userprofile extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require "../app/views/p_userprofile.phtml";
  }

}

new Userprofile;

?>
