<?php
  require_once 'config/config.php';
  require_once 'helpers/url_helper.php';
  // require_once 'lib/db.php';
  // require_once 'lib/controller.php';
  // require_once 'lib/core.php';

  #Autoload php
  spl_autoload_register(function($nameClass){
    require_once 'lib/'.$nameClass.'.php';
  });
?>