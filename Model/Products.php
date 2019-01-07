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

  public function getAll()
  {
    $sql = 'SELECT * FROM products';
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  public function getSearchedProduct(){
    $keyword = $_POST["productName"];
    $sql = "SELECT  *  FROM products WHERE `productName` LIKE '%$keyword%' ";
      // var_dump($sql);
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
    // var_dump($sql);
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
    // var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

  public function deleteProduct($productId)
  {
    $sql = "DELETE FROM `products` WHERE `productId`='$productId'";
    // var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
}


 ?>
