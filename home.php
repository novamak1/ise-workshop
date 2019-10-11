
<?php
include './connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $address = $_POST["grades"];
    $mobile = $_POST["city"];
    $query = "INSERT INTO customer (customer_id, cust_name, grade, city) VALUES (NULL, '$name', '$address', '$mobile')";
    $queryExec = mysqli_query($connection, $query);
    // if($queryExec){

    // } else {

 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>WELCOME TO SALESMAN</h1>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6"
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  placeholder="Enter Name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
</div>
</div>
<div class="row">
            <div class="col-md-6"
  <div class="form-group">
    <label for="exampleInputEmail1">enter the grades</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "grades"  placeholder="Enter grades">
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
</div>
</div>


  <div class="form-group">
    <label for="exampleInputPassword1">enter the city</label>
    <input type="text" class="form-control" name = "city" id="exampleInputPassword1" placeholder="City">
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  <button class="btn btn-icon btn-3 btn-success" type="submit">
                <span class="btn-inner--icon"><i class="fas fa-plus-circle"></i></span>
                
                <span class="btn-inner--text">Add details</span>
                
            </button>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
  </body>
</html>