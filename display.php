<?php
include 'stockDb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Display Stock</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="stock.php" class="text-light">ADD STOCK</a></button>
       
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `dbstock`";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $bloodtype = $row['bloodtype'];
                        $quantity = $row['quantity'];

                        echo '<tr>
                                <td>' . $bloodtype . '</td>
                                <td>' . $quantity . '</td>
                                <th scope="row">' . $id . '</th>
                                <td>
                                    <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                                </td>
                              </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
