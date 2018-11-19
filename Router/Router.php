<?php

/**
 *
 */
class Router
{

public $controllerName;
public $methodName;
public $params = [];

  function __construct()
  {

    $url = $_SERVER['REQUEST_URI'];
    $filteredInput = $this->filterInput($url);
    $controllerFilePath = $this->determineDestination($filteredInput);
    $this->sendToDestination($controllerFilePath);
  }

  public function filterInput($packets)
  {
    $explodedPackets = explode("/", $packets);

    return array_slice($explodedPackets, 3);
  }

  public function determineDestination($filteredPackets)
  {

      $this->controllerName = array_shift($filteredPackets);
      $this->methodName = array_shift($filteredPackets);

      $this->params = $filteredPackets;

      $controllerFile = ucfirst($this->controllerName) . ".php";
      $controllerFilePath = "Controller/". $controllerFile;

      var_dump($controllerFilePath);
      return $controllerFilePath;



  }

  public function sendToDestination($controllerFilePath)
  {
		if ($controllerFilePath == "Controller/.php" || $controllerFilePath == "")
		{
			$this->sendToPage("Home.php","Home","showHomePage");
		}

		if (!file_exists($controllerFilePath))
		{
      include $controllerFilePath;
      $controller = new $this->controllerName();
      $method = $this->methodName;

      if(method_exists($controller,$method))
      {
        $controller->$method($this->params);
      }
      else
      {
        $controller->defaultMethod($this->controllerName);
      }
		}
    else
    {
      $this->sendToPage("Error.php","Error","showErrorPage");
    }

		include $controllerFilePath;
		$controller = new $this->controllerName();
		$method = $this->methodName;
		$controller->$method($this->params);
  }

  public function sendToPage($filePath, $controller,$method)
  {
		$controllerFilePath = "Controller/Error.php";
		$this->controllerName = $controller;
		$this->methodName = $method;
		include $controllerFilePath;
		$controller = new $this->controllerName();
		$controller->$methodName($this->params);
  }







}


 ?>
