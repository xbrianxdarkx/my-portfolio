<?php

include 'stockDb.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];



                    $sql="delete from `dbstock` where id=$id";
                    $result=mysqli_query($conn,$sql);
                    if ($result){
                        //echo "Deleted Successfully";
                        header('location: display.php');
                    }else{
                        die(mysqli_error($conn));
                    }
}
