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

  public function getAll(){
    $sql = 'SELECT * FROM products';
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }

  public function addProduct(){

    $productName = $_POST["name"];
    $productPrice = $_POST["price"];

    $sql = "INSERT INTO `products` (`id`,`name`, `price`)
VALUES (null,'$productName', '$productPrice')";
var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = true;
    return $result;
  }

}


 ?>
