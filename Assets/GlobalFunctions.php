<?php

function loadView($viewPath, $vars = [])
{
  extract($vars);
  include_once 'View/' . $viewPath . '.php';
}

function vardump($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
}

function headHome()
{
  header("Location: ../Home/showHome");
}
 ?>
