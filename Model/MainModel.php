<?php

/**
 *
 */
class MainModel

{

  private $conn;
  private $fetchedData;
  private $sql;

  function __construct()
  {
    $this->conn = new PDO(DSN,USER,PASS);

    $pdo = $this->conn;
    // $fetchedData = $pdo->query()
    // foreach ($pdo->query($sql) as $row)
    // {
    //     print $row['id'] . "\t";
    //     print $row['name'] . "\t";
    //     print $row['price'] . "\n";
    // }
  }


}




 ?>
