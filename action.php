<?php
function __autoload($class)
{
  require_once "classes/$class.php";
}
if (isset($_GET['edit'])) {

  $uid = $_GET['edit'];
  $employee = new Employee();
  $employee->selectOne($uid);

}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $qty = $_POST['qty'];

  $fields = [
    'name' => $name,
    'qty' => $qty
  ];

  $employee = new Employee();
  $employee->insert($fields);
  header('Location:index.php');
}

?>