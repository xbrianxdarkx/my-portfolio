<?php
include 'stockDb.php';
if(isset($_POST['submit'])){
    $bloodtype = $_POST['name'];
    $quantity = $_POST['quan'];

    $sql = "INSERT INTO `dbstock` (`bloodtype`, `quantity`) VALUES ('$bloodtype', '$quantity')";
    $result = mysqli_query($conn, $sql);

    if ($result){
        //echo "Data inserted successfully";
        header('location: display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blood Stock</title>
  </head>
  <body>
   <div class="container">
   <form method="post">
  <div class="form-group">
    <label>BLOOD TYPE</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="form-group">
    <label>QUANTITY</label>
    <input type="number" class="form-control" placeholder="" name="quan" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


  </body>
</html>