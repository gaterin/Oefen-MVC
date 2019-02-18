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

  public function showProducts($page)
  {
    $model = $this->model;
    $products = $model->getAll($page);
    $this->getPages();
    loadView('Products', ['products' => $products]);
  }

  public function addProduct()
  {
    $model = $this->model;
    $products = $model->addProduct();
    $this->showProducts();
  }

  public function loadEditProduct($params)
  {
    $productId = $params[0];
    $productName = $params[1];
    $productPrice = $params[2];
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

  public function searchProduct()
  {
    $model = $this->model;
    $products = $model->getSearchedProduct();
    loadView('Products', ['products' => $products]);
  }

  public function sortProduct($sortBy)
  {
    $model = $this->model;
    $products = $model->sortProduct($sortBy);
    loadView('Products', ['products' => $products]);
    scrollDown();
  }
  public function getPages()
  {
    $model = $this->model;
    $pages = $model->getPages();
    $_SESSION["pages"] = $pages;

  }
}
 ?>
