<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="data.css">
    <title>Search Data</title>
</head>
<body>
    <center>
   
    <div class="container" id="search">
    <img class="logo" src="logo.png" alt="logo">
    <h1 id="reg">Registration Data</h1>
        <form method="post">
            <input type="text" placeholder="Search here" id="here" name="search">
            <button class="btn btn-primary" name="submit">Search</button>
           
        </form>
        <div class="container my-5">
            <table class="table">
                <?php
                if (isset($_POST['submit'])) {
                    $search = $_POST['search'];

                    $sql = is_numeric($search)
                        ? "SELECT * FROM reg WHERE id = '$search'"
                        : "SELECT * FROM reg WHERE email LIKE '%$search%'";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Blood Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>';

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                        <td>' . $row['id'] . '</td>
                                        <td>' . $row['email'] . '</td>
                                        <td>' . $row['bloodtype'] . '</td>
                                    </tr>';
                            }

                            echo '</tbody>';
                        } else {
                            echo '<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Blood Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="3" class="text-danger">Data Not Found</td>
                                    </tr>
                                    </tbody>';
                        }
                    }
                }
                ?>
            </table>
        </div>
        <a href="display.php">
  <button id="stock" class="btn btn-primary" name="submit2">BLOOD STOCK</button>
</a>
    </div>
</body>
</center>
</html>
