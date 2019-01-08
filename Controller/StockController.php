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
    $stock = $model->getAll();
    loadView('Stock', ['stock' => $stock]);
  }

  public function loadEditStock($params)
  {
    include_once './View/EditStock.php';
  }

  public function editStock(){
    $model = $this->model;
    $stock = $model->editStock();
    $this->showStock();
  }

}



 ?>
