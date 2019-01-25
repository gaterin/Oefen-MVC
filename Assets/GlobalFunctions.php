<?php

function loadView($viewPath, $vars1 = [], $vars2 = [], $vars3 = [])
{
  extract($vars1);
  extract($vars2);
  extract($vars3);
  include_once 'View/' . $viewPath . '.php';
}

function vardump($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
}

function headHome($msg = '')
{
  $_SESSION['msg'] = $msg;
  header("Location: ../Home/showHome");
}
function scrollDown()
{
  echo '<script>document.getElementById("tableHeader").scrollIntoView();</script>';
}
 ?>
