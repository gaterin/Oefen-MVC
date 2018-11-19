<?php

/**
 *
 */
class Router
{

private $controllerName;
private $methodName;
private $params = [];

  function __construct()
  {

    $url = $_SERVER['REQUEST_URI'];
    $filteredInput = $this->filterInput($url);
    $controllerFilePath = $this->determineDestination($filteredInput);
    $this->sendToDestination($controllerFilePath);
  }

  private function filterInput($packets)
  {
    $explodedPackets = explode("/", $packets);

    return array_slice($explodedPackets, 3);
  }

  private function determineDestination($filteredPackets)
  {

      $this->controllerName = array_shift($filteredPackets);
      $this->methodName = array_shift($filteredPackets);

      $this->params = $filteredPackets;

      $controllerFile = ucfirst($this->controllerName) . ".php";
      $controllerFilePath = "Controller/". $controllerFile;

      return $this->controllerFilePathExists($controllerFilePath);

  }

  private function controllerFilePathExists($controllerFilePath)
  {
    if (!file_exists($controllerFilePath))
    {
      $this->controllerName = "Home";
      $this->methodName = "showHomePage";
      $controllerFilePath = "Controller/Home.php";
    }
    return $controllerFilePath;
  }

  private function sendToDestination($controllerFilePath)
  {

		include $controllerFilePath;
		$controller = new $this->controllerName();
		$method = $this->methodName;
		$controller->$method($this->params);

  }



}


 ?>
