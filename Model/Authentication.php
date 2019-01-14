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
      $_SESSION['msg'] = "Wrong login!";
    }
    else
    {
      $_SESSION["username"] = $login[0]->username;
      $_SESSION["userrole"] = $login[0]->userRoleName;
      $_SESSION['msg'] = "Succesful login!";
    }
  }

  public function destroy()
  {
    session_unset();
    headHome();
    $_SESSION['msg'] = "Succesful logout!";
  }
}


 ?>
