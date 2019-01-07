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

  public function addLocation()
  {
    $model = $this->model;
    $locations = $model->addLocation();
    $this->showLocations();
  }

  public function loadEditLocation($locationId)
  {
    include_once './View/EditLocation.php';
  }

  public function editLocation()
  {
    $model = $this->model;
    $locations = $model->editLocation();
    $this->showLocations();
  }

  public function deleteLocation($locationId)
  {
    $model = $this->model;
    $locations = $model->deleteLocation($locationId);
    $this->showLocations();
  }

  public function searchLocation(){

    $model = $this->model;
    $locations = $model->getSearchedLocation();
    loadView('Locations', ['locations' => $locations]);
  }
}


 ?>
