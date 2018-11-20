<?php

/**
 * Router class to direct user to requested page depended on the url
 */

class Router
{

private $controllerName;
private $methodName;
private $params = [];


  /**
   * [Extracts URL to local @var $url]
   * [Executes @method filterInput()]
   * [Executes @method determineDestination()]
   * [Executes @method sendToDestination()]
   */
  function __construct()
  {

    $url = $_SERVER['REQUEST_URI'];
    $filteredInput = $this->filterInput($url);
    $controllerFilePath = $this->determineDestination($filteredInput);
    $this->sendToDestination($controllerFilePath);
  }

	/**
	 * [Get url from param and return it as usable array]
	 * @param  [string] $packets [The complete url]
	 * @var    [array] $explodedPackets [chops the url into pieces with slash as seperator]
	 * @return [array]          [The exploded array with the controllerName/method/params]
	 */
  private function filterInput($packets)
  {
    $explodedPackets = explode("/", $packets);

    return array_slice($explodedPackets, 3);
  }

  /**
   *[Fills class properties with return from @method filterInput()]
   *[Creates controller file path based on class @property $controllerName]
   * @param  [array] $filteredPackets [Return @method filterInput()]
   * @return [type]                  [Returns the return @method controllerFilePathExists()]
   */
  private function determineDestination($filteredPackets)
  {
    $this->controllerName = array_shift($filteredPackets);
    $this->methodName = array_shift($filteredPackets);

    $this->params = $filteredPackets;

    $controllerFile = ucfirst($this->controllerName) . ".php";
    $controllerFilePath = "Controller/". $controllerFile;

    return $this->controllerFilePathExists($controllerFilePath);
  }

/**
 * [Checks if the controller file exsists based
 * on parameter given @method determineDestination()]
 * [If the file does not exist the the controller will be set to "Home"
 * and the method to "showHomePage"]
 * @param  [string] $controllerFilePath [Controller file path to the file from index.php]
 * @return [string] $controllerFilePath [Returns controller file path]
 */
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

  /**
   * [Final step of router class]
   * [Includes controller file and initializes controller object]
   * [Executes given method with given params]
   * @param  [string] $controllerFilePath [Controller file path]
   */
  private function sendToDestination($controllerFilePath)
  {

		include $controllerFilePath;
		$controller = new $this->controllerName();
		$method = $this->methodName;
		$controller->$method($this->params);

  }



}


 ?>
