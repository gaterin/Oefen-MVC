<?php

/**
 *
 */
class ProductsController
{
  public $model;

  function __construct()
  {
    $this->model = new Products(DSN,USER,PASS);
  }

  public function showProducts()
  {
    $model = $this->model;
    $products = $model->getAll();
    loadView('Products', ['products' => $products]);
  }

  public function addProduct()
  {
    $model = $this->model;
    $products = $model->addProduct();
    header( 'Location: ../ProductsController/showProducts');

  }

  public function deleteProduct($productId)
  {
    $model = $this->model;
    $products = $model->deleteProduct($productId);
    header( 'Location: ../showProducts');
  }
}
 ?>
