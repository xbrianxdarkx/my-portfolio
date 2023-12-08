<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <center>
    <div class="container">
    <img class="logo" src="logo.png" alt="logo">
    <h1 id="reg">Registration Form</h1>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['number'];
        $bloodtype = $_POST['bloodtype'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
        if(empty($name) OR empty($email) OR empty( $phonenumber) OR empty($bloodtype) OR empty($address) OR empty($password)){
            array_push($errors, "All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Email is not valid");
        }
        if (isset($password) && strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters long");
        }
        require_once "database.php";
            $sql ="SELECT * FROM reg WHERE email = '$email'";
           $result = mysqli_query( $conn,$sql);
           $rowCount = mysqli_num_rows($result);
           if($rowCount>0){
            array_push($errors, "Email Already Exists!");
           }
            if(count($errors)>0) {
                foreach ($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                } 
            }else{
                $sql = "INSERT INTO reg (email, phonenumber, bloodtype, address, name, password) VALUES(?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if($prepareStmt){
                    mysqli_stmt_bind_param($stmt, "ssssss", $email, $phonenumber, $bloodtype, $address, $name, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfuly.</div>";
                }else{
                    die("Something Went Wrong");
                }
            }
            }
?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group" >
                <input type="email" class="form-control"   name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  name="bloodtype" placeholder="Blood Type">
            </div>
            <div class="form-group">
                <input type="password" class="form-control"  name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="text"class="form-control"  name="address" placeholder="Address">
            </div>
            <div class="form-btn">
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
                <a href="login.php">Already Account?</a>
             </div>
        </form>
    </div>
</body>
  </center>
</html>