<?php

//use anonymous function

function delPro($id) {
   
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');


    $query = "DELETE FROM `products` WHERE Id = '$id'";

    if (mysqli_query($con, $query)) {
        mysqli_close($con);
        return true;
    } 
}
$ID = $_GET['Id'];
if (delPro($ID)) {
    header("Location: index.php?suc=true");
} else {
    echo "Record Delete Failed";
}

?>