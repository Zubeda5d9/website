<?php
//anonymous function calling
function DatabaseConn() {
    
    $connection = mysqli_connect("localhost", "root", "", "ecommerce");

    return $connection;
}

function AddProduct($name, $price, $img) {
    $con = DatabaseConn();

    
    $img_loc = $img['tmp_name'];
    $img_name = $img['name'];
    $img_des = "Images/" . $img_name;
    move_uploaded_file($img_loc, 'Images/' . $img_name);


    //insert products into database
    $query = "INSERT INTO `products`(`Name`, `Price`, `Image`) VALUES ('$name','$price','$img_des')";
    if (mysqli_query($con, $query)) {
        echo "Product uploaded successfully.";
    }
    mysqli_close($con);
}

if (isset($_POST['upload'])) {
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['image'];
    AddProduct($name, $price, $img);
    header("location:index.php");
}




?>