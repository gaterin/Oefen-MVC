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

  public function addProduct()
  {

    $productName = $_POST["name"];
    $productPrice = $_POST["price"];

    $sql = "INSERT INTO `products` (`id`,`name`, `price`) VALUES (null,'$productName', '$productPrice')";
    var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

  public function editProduct()
  {
    $productId = $_POST["id"];
    $productName = $_POST["name"];
    $productPrice = $_POST["price"];

    $sql = "UPDATE `products` SET `name`='$productName' , `price`='$productPrice' WHERE `id`='$productId'";
    var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

  public function deleteProduct($productId)
  {
    $sql = "DELETE FROM `products` WHERE `id`='$productId'";
    var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
}


 ?>
