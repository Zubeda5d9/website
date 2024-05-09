
<?php
include_once "authenticate.php"
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles.css">

<body style="background:url(Images/login.png);background-repeat:no-repeat;margin-top:50px;background-size:cover;align-items:center;">
<div class="container" style="margin-top:50px;background-color: gainsboro;opacity:0.8;border-radius:20px;padding:30px;width:40%">
    <form method="POST">
        <!-- <div class="col-md-6">
            <label for="txtName" class="form-label" style="color:black ">Enter Your Name:</label>
            <input type="text" name="txtName" class="form-control" id="txtName" style="width: 400px; color: black;">
        </div>
        <div class="col-md-12">
            <label for="txtPassword" class="form-label" style="color:black">Enter User Password:</label>
            <input type="password" name="txtPassword" class="form-control" id="txtPassword" style="width: 400px; color: black; ">
        </div>
        <div class="col-12">
            <button type="submit" name="btn" class="btn btn-primary">Login</button>
        </div> -->
        <div class="mb-3">
            <label for="txtName" class="form-label">User Name</label>
            <input type="text" name="txtName" class="form-control" id="txtName" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="txtPassword" class="form-label">Password</label>
            <input type="password" name="txtPassword" class="form-control" id="txtPassword">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Login</button>
    </form>
</div>
</body>

<?php

$connect = mysqli_connect("localhost","root","","ecommerce");

if(isset($_POST["btn"])){
   
    $name     = $_POST["txtName"];
    $password=$_POST["txtPassword"];
    $per  = $_POST["txtPermission"];
    

   $query = "INSERT INTO `users`(`userName`, `userpassword`, `Permission`) VALUES ('$name','$password','$per')";
   if($per==="readonly"){
    header("Location: readonly.php");
   }else{
    header("Location: index.php");
   }

    
}

?>



