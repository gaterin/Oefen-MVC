<?php
session_start();
require 'Assets/GlobalFunctions.php';

require 'Model/Products.php';
require 'Model/Stock.php';
require 'Model/Locations.php';
require 'Model/Login.php';
require 'Model/Authentication.php';
require 'Model/Authorization.php';

require 'Router/Router.php';
require 'config.php';

// <pre> does weird things to the website layout.
// only use <pre> to display var_dump() output correctly on screen!!

// var_dump(APP_DIR);

// $model = new MainModel(DSN,USER,PASS);

include_once "View/Header.php";
$router = new Router();
include_once "View/Footer.php";


 ?>
