<?php


/**
 *
 */
class MainController
{
  // static $conn;
  public $model;

  function __construct(){

    $this->model = new Products(DSN,USER,PASS);

  }



}


 ?>
