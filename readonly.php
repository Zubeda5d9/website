<?php
// Start session
// session_start();

// Check if user is logged in and has read-only permission
// if (!isset($_SESSION['txtName']) || !isset($_SESSION['readonly']) || $_SESSION['readonly'] !== true) {
    // Redirect back to login page
    // header("Location: create.php");
    // exit;
    
// }


// Display read-only content here
?>


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

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-**" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.nav-link').click(function(event) {
        event.preventDefault(); // Prevent the default anchor click behavior
        var target = $(this).attr('href'); // Get the target URL from the href attribute
        window.location.href = target; // Redirect to the target URL
        // Optional: Smoothly scroll to the top of the redirected page
        // $('html, body').animate({
        //   scrollTop: 0
        // }, 800);
      });
    });
  </script>



   <style>
   input{
   margin: 10px;
 }
 </style>



</head>
<body style="background: rgb(7,123,125);
background: linear-gradient(0deg, rgba(7,123,125,1) 10%, rgba(18,21,122,1) 58%);color:white">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shopper Zone<span>img</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="offers.php">Offers</a>
      </li>
    </ul>
  </div>
</nav>

    


     
        <h1 style="margin-bottom:50px;text-align:center">Shopping Zone</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom:100px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/handbag.png" alt="First slide" style="height:400px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/handbag.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/handbag.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        

    


    <div class="container">
    <h1 style="text-align:center;margin-bottom:20px" class="products">Products</h1>

<div class="card-container" style="display: flex; flex-wrap: wrap; justify-content: space-around;color:black">
  <?php
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
    $pic = mysqli_query($con, "SELECT * FROM `products`");
    while ($row = mysqli_fetch_array($pic)) {
        echo "<div class='card' style='width: 18rem; margin-bottom: 20px;'>";
        echo "<img src='$row[Image]' class='card-img-top' alt='$row[Name]'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>$row[Name]</h5>";
        echo "<p class='card-text'>Price: $row[Price]</p>";
        // Link to open modal with unique ID
        echo "<a href='#' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#productModal$row[Id]'>View Details</a>";
        echo "</div>";
        echo "</div>";
        
        // Modal for each product
        echo "<div class='modal fade' id='productModal$row[Id]' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='productModalLabel$row[Id]' aria-hidden='true'>";
        echo "<div class='modal-dialog'>";
        echo "<div class='modal-content'>";
        echo "<div class='modal-header'>";
        echo "<h5 class='modal-title' id='productModalLabel$row[Id]'>$row[Name]</h5>";
        echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
        echo "</div>";
        echo "<div class='modal-body'>";
        // Modal body content with respective information
        echo "<img src='$row[Image]' class='img-fluid' alt='$row[Name]'>";
        echo "<p>Price: $row[Price]</p>";
        // Add more product information here
        echo "</div>";
        echo "<div class='modal-footer'>";
        echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
        echo "<button type='button' class='btn btn-primary'>Add to Cart</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    mysqli_close($con);
  ?>
</div>


<footer style="margin-top:50px;">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between;color:black;">
    <div><span>logo</span></div>
    <div>
      <div><a href="readonly.php" style="text-decoration:none;color:white;">Home</a></div>
      <div><a href="products.php" style="text-decoration:none;color:white;">Products</a></div>
      <div><a href="offers.php" style="text-decoration:none;color:white;">Offers</a></div>
    </div>
    <div>
      <div>Address:location</div>
      <div>Phone Number</div>
    </div>

    
  </div>
</footer>




</div>
</body>
</html>
















