<?php

# SEARCH CONTROLLER

class Search extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require_once "../app/views/p_search.phtml";
  }
}

new Search;

?>
