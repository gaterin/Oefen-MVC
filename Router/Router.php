<?php

/**
 *
 */
class Router
{



  function __construct()
  {
    $url = $_SERVER['REQUEST_URI'];
    $filteredInput = explode("/", $url);
    echo "<pre>";
    var_dump($filteredInput);

  }
}


 ?>
