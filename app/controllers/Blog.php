<?php

# BLOG CONTROLLER

class Blog extends App {

  function __construct() {
    $this->index();
  }

  function index() {
    require_once "../app/views/p_blog.phtml";
  }
}

new Blog;

?>
