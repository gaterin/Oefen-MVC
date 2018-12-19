<?php

/**
 *
 */
class ProductsController extends MainController
{

  function __construct()
  {
    parent::__construct(DSN,USER,PASS);
  }

  public function showProducts()
  {
    $model = $this->model;
    $products = $model->getAll();
    loadView('Products', ['products' => $products,]);
  }

}



 ?>
