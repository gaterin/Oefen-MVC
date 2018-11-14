<?php


/**
 *
 */
class MainController
{

  function __construct(){}

  public function defaultMethod($defaultMethodParam)
  {
    include("View/".$defaultMethodParam.".php");
  }

}


 ?>
