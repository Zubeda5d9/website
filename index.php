<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Zone</title>
    <link rel="stylesheet" href="style.css">
   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>






<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-DnpusQO+cC25/CbjtmWQXzvK7a7Uhxb0T8YhfjZL7dtDePFzABcWRxFzGLOaQzR7fTb6nAN46gqzLp4HnIzKYw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->





  <style>
  input{
    margin: 10px;
}
</style>

</head>
<body style="background: rgb(7,123,125);
background: linear-gradient(0deg, rgba(7,123,125,1) 10%, rgba(18,21,122,1) 58%);color:white">
    <center>
        <h1 style="margin-bottom:50px">Admin Dashboard</h1>
        <div class="main">
            <form action="retrieve.php" method="POST" enctype="multipart/form-data" id="prod_form">
        <div class="mb-3">
            <label for="productName" class="form-label" >Enter Product Name:</label>
            <input type="text" name="name" class="form-control" id="productName" style="width: 400px; color: black;" required>

        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Enter Product Price:</label>
            <input type="text" name="price" class="form-control" id="productPrice" style="width: 400px; color: black;" required>

        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Image:</label>
            <input type="file" name="image" class="form-control" id="productImage" style="width: 400px; color: black;" required>
        </div>
        <div class="mb-3">
            <button type="submit" name="upload" class="btn btn-primary" style="margin-bottom:50px">Upload</button>
        </div>
    </form>
</div>

    </center>


        <div class="container">

        <table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:white">Id</th>
      <th scope="col" style="color:white">Name</th>
      <th scope="col" style="color:white">Price</th>
      <th scope="col" style="color:white">Image</th>
      <th scope="col" style="color:white">Delete</th>
      <th scope="col" style="color:white">Update</th>
      
     
      
      
      
      
    </tr>
  </thead>
  <tbody>
    
<?php
//use anonymous function

function Products() {

    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');


    // fetch products
    $query = "SELECT * FROM `products`";

    
    $result = mysqli_query($con, $query);


    $pro = [];


    while ($row = mysqli_fetch_array($result)) {
        $pro[] = $row;
    }


    mysqli_close($con);


    return $pro;
}

// Call the function to retrieve products
$pro = Products();

// Iterate  the products and display in the HTML table
foreach ($pro as $row) {
    echo "
        <tr>
            <td>{$row['Id']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['Price']}</td>
            <td><img src='{$row['Image']}' width='200px' height='100px'></td>
            <td><a href='delete.php?Id={$row['Id']}' class='btn btn-danger'>Delete</a></td>

          

            <td><a href='update.php?Id={$row['Id']}' class='btn btn-warning'>Update</a></td>
            <td></td>
        </tr>
    ";
}

?>



</tbody>
</table>
</div>
</body>
</html>

