<?php

class Employee extends Database
{
  public function select()
  {
    $sql = "select * from employees";
    $result = $this->connect()->query($sql);
    if ($result->rowCount() > 0) {
      while ($row = $result->fetch()) {

        $data[] = $row;

      }
      return $data;
    }
  }
}