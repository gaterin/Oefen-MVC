<?php
/**
 *
 */
class Home
{

	function __construct()
	{

	}

	public function showHomePage()
  {
    include("View/Home.php");
  }

	public function defaultMethod()
	{
		include("View/Home.php");
	}



}



?>
