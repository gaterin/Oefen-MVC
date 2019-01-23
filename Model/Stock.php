<?php
/**
 *
 */
class Stock
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
    $sql = 'SELECT * FROM stock NATURAL JOIN products NATURAL JOIN locations';
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  public function getAllProducts()
  {
    $Products = new Products();
    return $Products->getAll();

  }
  public function getAllLocations()
  {
    $locations = new Locations();
    return $locations->getAll();
  }
  public function addStock()
  {
    $locationId = $_POST['location'];
    $productId = $_POST["product"];
    $amountInStock = $_POST["amountInStock"];
    $sql = "INSERT INTO `stock` (`amountInStock`, `locationId`, `productId`) VALUES ('$amountInStock', '$locationId', '$productId')";
    // var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function editStock()
  {
    $locationId = $_POST["locationId"];
    $productId = $_POST["productId"];
    $amountInStock= $_POST["amountInStock"];

    $sql = "UPDATE `stock` SET `amountInStock`='$amountInStock' WHERE `locationId`='$locationId' AND `productId`='$productId' ";
    // var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

  public function deleteStock($params)
  {
    $sql = "DELETE FROM `stock` WHERE `productId`='$params[0]' AND `locationId`='$params[1]'";
    // var_dump($sql);
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }
  public function getSearchedStockLocation()
  {
    $keyword = $_POST["location"];
    $sql = "SELECT * FROM stock NATURAL JOIN products NATURAL JOIN locations WHERE `locationName` LIKE '%$keyword%' ";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  public function getSearchedStockProduct()
  {
    $keyword = $_POST["product"];
    $sql = "SELECT * FROM stock NATURAL JOIN products NATURAL JOIN locations WHERE `productName` LIKE '%$keyword%' ";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
}



 ?>
