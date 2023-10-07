<?php

# APP CONTROLLER

class App {

  function __construct() {
    $this->register_visit();
    $this->load_controller();
  }

  function get_url_query() {
    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/", $URL);
    return $URL;
  }

  function tokenize_uri() {
    $URI = $_SERVER['REQUEST_URI'];
    $URI = explode("/", $URI);
    return $URI;
  }

  function register_visit() {
    $http_response=$_SERVER['REDIRECT_STATUS'] ?? "200";
    $visitlog=date("Y-m-d @ H:i:s")." @ ".$_SERVER['REMOTE_ADDR']." @ ".$_SERVER['HTTP_USER_AGENT']." @ ".$_SERVER['REQUEST_URI']." @ ".$http_response." @ referer:".$_SERVER['HTTP_REFERER']."\n";
    file_put_contents("../logs/visitors.log",$visitlog, FILE_APPEND | LOCK_EX);
  }

  function load_controller() {
    require "../app/controllers/.configs.php";
    $URL = $this->get_url_query();
    $FILENAME = "../app/controllers/".ucfirst($URL[0].".php");

    #$URI = $this->tokenize_uri();
    #$filename2 = "../app/controllers/".ucfirst($URI[3].".php");

    # PAGE AS "/baseframe/public/?url=<KEYWORD>"
    if ( file_exists( $FILENAME ) ) {
      $ENV_VARS['CURRENTPAGE'] = $URL[0];
      $ENV_VARS['CONTEXT'] = $URL[0];
      $_SESSION['user'] = 'guest';
      require "../app/views/frames/frame_header.phtml";
      require "../app/views/frames/frame_navbar.phtml";
      require "../app/views/frames/frame_sidebar.phtml";
      require $FILENAME;
      require "../app/views/frames/frame_footer.phtml";
      require "../app/views/frames/frame_debug.phtml";
      require "../app/views/frames/frame_footer_scripts.phtml";
    } else {
      require "../app/controllers/Error.php";
    }

    # PAGE AS "/baseframe/public/<KEYWORD>"
    #if ( file_exists($filename2) ) {
    #  require $filename2;
    #  return;
    #}
  }
}

new App;

?>
