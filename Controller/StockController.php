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

  public function showStock($stock="")
  {
    $model = $this->model;
    if ($stock=="")
    {
      $stock = $model->getAll();
    }
    $products = $model->getAllProducts();
    $locations = $model->getAllLocations();
    LoadView('Stock',['products' => $products],['stock' => $stock],['locations' => $locations]);
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
  public function searchStockLocation()
  {
    $model = $this->model;
    $stock = $model->getSearchedStockLocation();
    loadView('Stock', ['stock' => $stock]);
  }
  public function searchStockProduct()
  {
    $model = $this->model;
    $stock = $model->getSearchedStockProduct();
    loadView('Stock', ['stock' => $stock]);
  }

  public function sortStock($sortBy)
  {
    $model = $this->model;
    $stock = $model->sortStock($sortBy);
    $this->showStock($stock);
    scrollDown();
  }
}



 ?>
