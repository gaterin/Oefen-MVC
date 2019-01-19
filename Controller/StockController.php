<?php


/**
 *
 */
class StockController
{

  public $model;

  function __construct()
  {
    $this->model = new Stock(DSN,USER,PASS);
  }

  public function showStock()
  {
    $model = $this->model;
    $this->loadAddStockView();
    $stock = $model->getAll();
    loadView('Stock', ['stock' => $stock]);

  }
  public function loadAddStockView()
  {
    $model = $this->model;
    $allProducts = $model->getAllProducts();
    vardump($allProducts);
  }
  public function addStock()
  {
    $model = $this->model;
    $stock = $model->addStock();
    $this->showStock();
  }

  public function loadEditStock($params)
  {
    $productId = $params[0];
    $locationId = $params[1];
    $amountInStock = $params[2];
    $productName = $params[3];
    $locationName = $params[4];
    include_once './View/EditStock.php';
  }

  public function editStock()
  {
    $model = $this->model;
    $stock = $model->editStock();
    $this->showStock();
  }

  public function deleteStock($params)
  {
    $model = $this->model;
    $stock = $model->deleteStock($params);
    // $_SESSION["msg"] = "$params[2] has been deleted!";
    $this->showStock();
  }
}



 ?>
