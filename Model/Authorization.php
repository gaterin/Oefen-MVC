<?php


class Authorization
{

  function __construct($controller)
  {
    $userrole = $_SESSION['userrole'];
    $this->determineLogin($controller,$userrole);
  }

  public function determineLogin($controller,$userrole)
  {
    if (isset($userrole))
    {
        $this->determineAuthorization($controller,$userrole);
    }
    else
    {
      headHome();
    }
  }
  public function determineAuthorization($controller,$userrole)
  {
    switch ($controller)
    {
      case 'ProductsController':
        switch ($userrole)
        {
          case 'admin':
            break;
          case 'manager':
            break;
        }
        break;

      case 'StockController':
        switch ($userrole)
        {
          case 'admin':
            break;
          case 'manager':
            break;
        }
        break;

      case 'LocationsController':
        switch ($userrole)
        {
        case 'admin':
          break;
        case 'manager':
          headHome();
          break;
        }

      break;
    }
  }


}


 ?>
