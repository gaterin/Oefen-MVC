<?php


/**
 *
 */
class LoginController
{

  public $loginModel;
  public $authenticationModel;

  function __construct()
  {
    $this->loginModel = new Login(DSN,USER,PASS);
    $this->authenticationModel = new Authentication(DSN,USER,PASS);

  }

  public function login()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loginModel = $this->loginModel;
    $login = $loginModel->login($username,$password);
    vardump($login);
    $authenticationModel = $this->authenticationModel;
    $authenticationModel->authenticate($login);
    headHome();
  }
  public function logout()
  {

    $authenticationModel = $this->authenticationModel;
    $authenticationModel->destroy();

  }

  // public function loadEditStock($params)
  // {
  //   include_once './View/EditStock.php';
  // }
  //
  // public function editStock(){
  //   $model = $this->model;
  //   $stock = $model->editStock();
  //   $this->showStock();
  // }

}



 ?>
