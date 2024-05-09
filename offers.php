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
        <a class="nav-link" href="#">Offers</a>
      </li>
    </ul>
  </div>
</nav>

<div><h1>offers</h1></div>