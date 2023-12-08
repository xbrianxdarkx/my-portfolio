<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="log.css">
    <title>Login</title>
</head>
<body>
    <center>
    <div class="container">
    <img class="logo" src="logo.png" alt="logo">
        <?php
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST ['password'];
                require_once "database.php";
                $sql = "SELECT * FROM reg WHERE email ='$email'";
                    $result = mysqli_query($conn, $sql);
                    $reg = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if($reg){
                        if (password_verify($password, $reg['password'])){
                            header("Location: search.php");
                            die();
                        } else {
                            echo "<div class='alert alert-danger'>Password does not match</div>";
                        }
                    }else{
                        echo "<div class='alert alert-danger'>Email does not match</div>";
                    }
            }
    ?>  
                <h1 id="reg">Login Form</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email :" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password :" name="password" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="submit" class="btn btn-primary">
                    </div>
        </form>
</body>
  </center>
</html>