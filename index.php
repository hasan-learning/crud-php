<?php
function __autoload($class)
{
  require_once "classes/$class.php";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">Enter Medicine Details</div>
            <div class="card-body">
              <form action="action.php" method="post">
              <table class="table table-hover">
                <tr>
                  <td>Medicine Name:</td>
                  <td><input type="text" class="form-control" name="name" value="" placeholder="medicine name"></td>
                </tr>
                <tr>
                  <td> Quantity:</td>
                  <td><input type="text" class="form-control" name="qty" placeholder="medicine quantity"></td>
                </tr>
                <tr>
                  <td colspan="2"><button type="submit" name="submit" class="btn btn-success">Save</button></td>
                </tr>
              </table>
                </form>
            </div>
            <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-md-3"></div>
        </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>#</th>
              <th>Medicine Name</th>
              <th>Available Stock</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $employee = new Employee();
            $rows = $employee->select();
            foreach ($rows as $key => $row) {
              ?>
              <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['name'] ?></td>
              <td><?= $row['qty'] ?></td>
              <th>
                <a href="?edit=<?= $row['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                <a href="?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
              </th>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
  </body>
</html>