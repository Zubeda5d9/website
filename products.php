 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



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


 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shopper Zone<span>img</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="readonly.php">Home <span class="sr-only">(current)</span></a>
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





<div class="container">
    <h1 style="text-align:center;margin-bottom:20px" class="products">Products</h1>

    <div class="card-container" style="display: flex; flex-wrap: wrap;margin-right:10px justify-around: space-bet\ween;color:black">
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