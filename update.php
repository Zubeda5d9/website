<?php
//Anonymous function calling

function UpdateProduct($id) {
   
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');

    $query = "SELECT * FROM `products` WHERE Id = '$id'";

   
    $res = mysqli_query($con, $query);

    
    if (mysqli_num_rows($res) > 0) {
        
        $data = mysqli_fetch_assoc($res);
        return $data;
    } 
    mysqli_close($con);
}

    $ID = $_GET['Id'];
    $pro = UpdateProduct($ID);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    input{
        margin: 10px;
    }
</style>
</head>
<body>

<center>
        <div class="main">
        <form action="updateProduct.php" method="POST" enctype="multipart/form-data" >
        <label for="">Name:</label>
        <input type="text" value="<?php echo $pro['Name'] ?>" name="name"><br>
        <label for="">Price :</label>
        <input type="text" value="<?php echo $pro['Price'] ?>" name="price" id=""><br>
        <label for="">Image:</label>
        <td><input type="file" name="image" value="<?php echo $pro['Image'] ?>"><img src="<?php echo $pro['Image'] ?>"  width = '200px'  height = '70px' alt=""> </td><br>
            <input type="hidden" name="Id"  value="<?php echo $pro['Id'] ?>">
        <button type="submit" name="update" class = 'btn btn-danger m-2'>Update</button>

        </form>
    </div>
        </center>


       

    </body>    
</html>