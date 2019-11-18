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

  public function insert($fields)
  {
    // INSERT INTO `employees`(`id`, `name`, `qty`) VALUES ([value-1],[value-2],[value-3])
    $columns = implode(', ', array_keys($fields));
    $placeholder = implode(', :', array_keys($fields));
    $sql = "INSERT INTO `employees`($columns) VALUES (:" . $placeholder . ")";

    $stmt = $this->connect()->prepare($sql);

    foreach ($fields as $key => $value) {
      $stmt->bindValue(':' . $key, $value);
    }

    $stmtExec = $stmt->execute();

    if ($stmtExec == true) {
      echo '<h2>Successfully inserted!</h2>';
    } else {
      echo '<h2>Failed inserted!</h2>';
    }
  }

  public function selectOne($id)
  {
    $sql = "select * from employees where id= :id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }


}