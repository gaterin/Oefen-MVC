<?php

class LocationsController
{

  public $model;

  function __construct()
  {
    $this->model = new Locations(DSN,USER,PASS);
  }

  public function showLocations()
  {
    $model = $this->model;
    $locations = $model->getAll();
    loadView('Locations', ['locations' => $locations]);
  }
}


 ?>
