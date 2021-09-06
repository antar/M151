<?php

class Database {
  private $host="127.0.0.1";
  private $user="root";
  private $db="M151";  
  private $pass="getElementById()";
  private $conn;
  
  public function __construct() {      
    $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);   
  }
}

?>