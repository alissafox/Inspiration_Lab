<?php
// $hostname = "localhost";
// $username = "root";
// $password = "root";
// $databasename = "php_assignment";

// $conn = mysqli_connect($hostName,$username,$password,$databasename);

// if($conn == false){
//     echo "not correct";
//     die();
//   }//else{
// //     echo "hey wellcome";
// //     }
    ?>
    <?php

class Database {
  private  $hostname = "localhost";
  private  $username = "root";
  private  $password = "root";
  private  $database = "astrograma";
  public $conn;

  //constructor
  public function __construct(){
   $this->conn = $this->getConnection();

  }
  //methode
  private function getConnection(){
      $connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
    if($connection == false){
        echo  "no connection";
        die();
    }
   
    return $connection;
  }
// select query
  public function selectQuery($sql){
      return  mysqli_query($this->conn, $sql)->fetch_all(MYSQLI_ASSOC);
  }
//isert data query
  public function insertQuery($sql){
    return  mysqli_query($this->conn, $sql);

  }
}