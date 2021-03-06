<?php

/**
 *
 */
class Products
{
  private $conn;
  private $fetchedData;
  private $sql;

  function __construct()
  {
    $this->conn = new PDO(DSN,USER,PASS);
    $pdo = $this->conn;
  }

  public function getAll($page)
  {
    if ($page=="")
    {
      $page=1;
    }
    $pageIndexNumber = $page * 5 - 5;

    $sql = "SELECT * FROM products LIMIT $pageIndexNumber,5";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  public function getSearchedProduct()
  {
    $keyword = $_POST["productName"];
    $sql = "SELECT  *  FROM products WHERE `productName` LIKE '%$keyword%' ";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  public function addProduct()
  {

    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];

    $sql = "INSERT INTO `products` (`productId`,`productName`, `productPrice`) VALUES (null,'$productName', '$productPrice')";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

  public function editProduct()
  {
    $productId = $_POST["productId"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];

    $sql = "UPDATE `products` SET `productName`='$productName' , `productPrice`='$productPrice' WHERE `productId`='$productId'";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

  public function deleteProduct($productId)
  {
    $sql = "DELETE FROM `products` WHERE `productId`='$productId'";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

  public function sortProduct($sortBy)
  {
    if (!isset($_SESSION["orderBy"]))
    {
      $_SESSION["orderBy"] = "DESC";
    }
    $orderBy = $_SESSION["orderBy"];
    switch ($orderBy)
    {
      case 'ASC':
        $orderBy="DESC";
        break;
      case 'DESC':
        $orderBy="ASC";
        break;
    }
    $_SESSION["orderBy"] = $orderBy;

    if ($sortBy=="productName")
    {
      $sortBy=="productName";
    }
    else
    {
      $sortBy = "productPrice";
    }
    $sql = "SELECT * FROM products ORDER BY $sortBy $orderBy";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }

  public function getPages()
  {
    $sql = "SELECT COUNT(*) FROM `products`";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    $pages = ceil($result[0]/5);
    return $pages;
  }
}


 ?>
