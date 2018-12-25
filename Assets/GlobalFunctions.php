<?php

function loadView($viewPath, $vars = [])
{
  extract($vars);
  include_once 'View/' . $viewPath . '.php';
}


 ?>
