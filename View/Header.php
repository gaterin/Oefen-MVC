<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <base href="http://localhost/php/Oefen-MVC/"/>
    <link rel="shortcut icon" href="Images/Logo.png" type="image/png" />
    <link type="text/css" rel="stylesheet" href="./Style/GridStyle.css">
    <link type="text/css" rel="stylesheet" href="./Style/MainStyle.css">
    <link type="text/css" rel="stylesheet" href="./Style/HeaderStyle.css">
    <link type="text/css" rel="stylesheet" href="./Style/FooterStyle.css">
    <title></title>
  </head>
  <button type="button" id="BorderSwitchId" onclick="GridBorderSwitch();">Switch borders on/off</button>
  <body>
    <div class="row">
      <div class="col-12">
        <div class="col-2">
          <img src="./Images/Logo.png">
        </div>
        <div class="col-8">
          <h1>ToolsForEver</h1>
          <div class="row">
            <nav class="col-12 navBar">
              <li class="col-3 navButtons" onclick="location.href='./Home/showHome' ">Home</li>
              <li class="col-3 navButtons" onclick="location.href='./ProductsController/showProducts' ">Products</li>
              <li class="col-3 navButtons" onclick="location.href='./StockController/showStock' ">Stock</li>
              <li class="col-3 navButtons" onclick="location.href='./LocationsController/showLocations' ">Locations</li>
            </nav>
          </div>
        </div>

        <div class="col-2">

          <?php
          if (!isset($_SESSION["username"]))
          {  ?>

          <h1>Login</h1>
          <form class="" action="./LoginController/login" method="post">
            <input type="text" name="username" placeholder="Enter username..." required>
            <input type="password" name="password" placeholder="Enter password..." required>
            <input type="submit" name="loginbool" value="Login">
          </form>
        <?php }else {  ?>
          <h1>Logout</h1>
          <p>logged in as: <?php echo $_SESSION["username"];?></p>
          <form class="" action="./LoginController/logout" method="post">
            <input type="submit"  value="Logout">
          </form>
          <?php } ?>

        </div>
        <div class="row">
          <div class="col-12">
            <h2>
              <?php
              // vardump($_SESSION["msg"]);
              if (isset($_SESSION["msg"]))
              {
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
              }
              ?>
            </h2>
          </div>
        </div>

      </div>
    </div>
