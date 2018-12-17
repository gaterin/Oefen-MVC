<?php
require 'Controller/MainController.php';
require 'Router/Router.php';
require 'config.php';
require 'Model/MainModel.php';

// echo "<pre>";
// <pre> does weird things to the website layout.
// only use <pre> to display var_dump() output correctly on screen!!

// var_dump(APP_DIR);
include "View/Header.php";
$router = new Router();
include "View/Footer.php";


 ?>
