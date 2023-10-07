<?php

# CONTACT CONTROLLER

class Contact extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require_once "../app/views/p_contact.phtml";
  }
}

new Contact;

?>
