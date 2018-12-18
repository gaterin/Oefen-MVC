<?php

/**
 *
 */
class MainModel

{

  private $conn;
  private $fetchedData;
  private $sql;

  function __construct($configdsn,$configuser,$configpass)
  {
    $this->conn = new PDO($configdsn,$configuser,$configpass);
    $sql = 'SELECT * FROM products';
    $pdo = $this->conn;
    // $fetchedData = $pdo->query()
    foreach ($pdo->query($sql) as $row) {
        print $row['id'] . "\t";
        print $row['name'] . "\t";
        print $row['price'] . "\n";
    }
  }


}




 ?>
