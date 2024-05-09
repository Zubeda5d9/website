<?php

function updateProduct($id, $name, $price, $image) {
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');

    $img_loc = $image['tmp_name'];
    $img_name = $image['name'];
    $img_des = "Images/" . $img_name;
    move_uploaded_file($img_loc, 'Images/' . $img_name);

    $query = "UPDATE `products` SET `Name`='$name', `Price`='$price', `Image`='$img_des' WHERE Id = '$id'";
    $result = mysqli_query($con, $query);

    mysqli_close($con);

    return $result;
}

if (isset($_POST['update'])) {
    $ID = $_POST['Id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];

    if (updateProduct($ID, $NAME, $PRICE, $IMAGE)) {
        header("location:index.php");
    }
}

?>
