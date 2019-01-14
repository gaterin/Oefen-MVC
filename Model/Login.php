<?php
/**
 *
 */
class Login
{

  private $conn;
  private $fetchedData;
  private $sql;

  function __construct()
  {
    $this->conn = new PDO(DSN,USER,PASS);
    $pdo = $this->conn;
  }

  public function login($username,$password)
  {
    $sql = "SELECT * FROM users NATURAL JOIN userroles WHERE `username`='$username' AND `password`='$password' ";
    $pdo = $this->conn;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }

  // public function getSearchedLocation(){
  //   $keyword = $_POST["locationName"];
  //   $sql = "SELECT  *  FROM locations WHERE `locationName` LIKE '%$keyword%' ";
  //     // var_dump($sql);
  //   $pdo = $this->conn;
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->execute();
  //   $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  //   return $result;
  // }
  // public function addLocation()
  // {
  //
  //   $locationName = $_POST["locationName"];
  //
  //   $sql = "INSERT INTO `locations` (`locationId`,`locationName`) VALUES (null,'$locationName')";
  //   // var_dump($sql);
  //   $pdo = $this->conn;
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->execute();
  // }
  //
  // public function editLocation()
  // {
  //   $locationId = $_POST["locationId"];
  //   $locationName = $_POST["locationName"];
  //
  //   $sql = "UPDATE `locations` SET `locationName`='$locationName' WHERE `locationId`='$locationId'";
  //   // var_dump($sql);
  //   $pdo = $this->conn;
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->execute();
  // }
  //
  // public function deleteLocation($locationId)
  // {
  //   $sql = "DELETE FROM `locations` WHERE `locationId`='$locationId'";
  //   // var_dump($sql);
  //   $pdo = $this->conn;
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->execute();
  // }
}



 ?>
