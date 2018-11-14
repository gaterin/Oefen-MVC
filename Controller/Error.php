<?php
/**
 *
 */
class Error extends MainController
{


  function __construct(){}

  public function showErrorPage()
  {
    include("View/Error.php");
  }

}

?>
