<?php

/**
 *
 */
class ProductsController extends MainController
{

  function __construct()
  {
    // parent::__construct();
  }

  public function showProducts()
  {
    include("View/Products.php");
  }

}



 ?>
