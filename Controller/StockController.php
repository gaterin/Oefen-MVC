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
}



 ?>
