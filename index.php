<?php
require_once 'Controller/MainController.php';
require_once 'Model/MainModel.php';
require_once 'Model/Products.php';
require_once 'Router/Router.php';
require_once 'config.php';


// echo "<pre>";
// <pre> does weird things to the website layout.
// only use <pre> to display var_dump() output correctly on screen!!

// var_dump(APP_DIR);

// $model = new MainModel(DSN,USER,PASS);

include "View/Header.php";
$router = new Router();
include "View/Footer.php";


 ?>
