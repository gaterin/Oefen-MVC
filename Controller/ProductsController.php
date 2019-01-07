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
    $this->showProducts();
  }

  public function loadEditProduct($productId)
  {
    include_once './View/EditProduct.php';
  }

  public function editProduct()
  {
    $model = $this->model;
    $products = $model->editProduct();
    $this->showProducts();
  }

  public function deleteProduct($productId)
  {
    $model = $this->model;
    $products = $model->deleteProduct($productId);
    $this->showProducts();
  }

  public function searchProduct(){

    $model = $this->model;
    $products = $model->getSearchedProduct();
    loadView('Products', ['products' => $products]);
  }
}
 ?>
