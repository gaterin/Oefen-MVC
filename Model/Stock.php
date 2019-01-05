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
    $sql = 'SELECT * FROM products';
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
}



 ?>
