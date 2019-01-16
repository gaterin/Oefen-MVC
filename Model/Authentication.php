<?php


/**
 *
 */
class Authentication
{

  function __construct()
  {

  }

  public function authenticate($login)
  {
    if (empty($login))
    {
      return "Wrong login!";
    }
    else
    {
      $_SESSION["username"] = $login[0]->username;
      $_SESSION["userrole"] = $login[0]->userRoleName;
      return "Succesful login!";
    }
  }

  public function destroy()
  {
    session_unset();
    headHome("Succesful logout!");
  }
}


 ?>
