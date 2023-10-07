<?php

# Main Controller Class

class Controller {

  function __construct() {
    echo "test";
  }

  function load_view( $vname ) {

    if ( $ENV_VARS['MAINTENANCE_MODE'] == "1" ) {
      // header('Location: app/views/page_maintenance.php');
      include "../views/p_maintenance.phtml";
      die();
    }

    if ( $http_status != 200 ) {
      include "app/views/p_error.phtml?url=".$http_status;
      break;
    }

    $ENV_VARS["CURRENTPAGE"] = $vname;
    $URL = $_GET["url"];

    $PAGE_FILENAME = strtolower("app/views/p_".$view.".phtml");

    if ( file_exists( $PAGE_FILENAME ) ) {
      include $PAGE_FILENAME;
    } else {
      include "app/views/p_404.php";
    }

    if ( $URL == "home" ) {
      include "app/views/p_home.phtml";
      break;
    } elseif ( $URL == "login" ) {
      include "app/plugins/plug_users-base/p_user-login.phtml";
      break;
    } elseif ( $url == "profile" ) {
      include "app/plugins/plug_users-base/p_user-profile.phtml";
      break;  
    } elseif ( $url == "search" ) {
      include "app/view/p_search.phtml";
      break;  
    } elseif ( $url == "contact" ) {
      include "app/views/p_contact.phtml";
      break;
    } elseif ( $url == "services" ) {
      include "app/views/p_services.phtml";
      break;  
    } else {
      include "app/views/p_home.phtml";
      break;
    }
  }
}

new Controller;

?>
