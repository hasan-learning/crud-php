<?php

class Database
{
  protected function connect()
  {
    try {
      $conn = new PDO("mysql:host=localhost;dbname=crud_oop", 'root', 'root');
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

  }
}