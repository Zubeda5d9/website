<!-- <?php
// session_start();

// $connect = mysqli_connect("localhost", "root", "", "ecommerce");

// if (isset($_POST["btn"])) {
//     $name = $_POST["txtName"];
//     $password = $_POST["txtPassword"];
//     $query = "SELECT * FROM `users` WHERE `userName`='$name' AND `userpassword`='$password'";
//     $result = mysqli_query($connect, $query);

//     if (mysqli_num_rows($result) > 0) {
//         $_SESSION['authenticated'] = true;
//         header("Location: index.php"); 
//         exit(); 
//     } else {
//         header("Location: create.php?error=1 "); 
//         exit();
//     }
// }
?> -->


<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "ecommerce");

if (isset($_POST["btn"])) {
    
    $name = $_POST["txtName"];
    $password = $_POST["txtPassword"];

    $query = "SELECT * FROM `users` WHERE `userName`='$name' AND `userpassword`='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $permission = $user['Permission'];

        $_SESSION['authenticate'] = true;
        $_SESSION['permission'] = $permission;

        
        if ($permission === "readonly") {
            header("Location: readonly.php");
        } else {
            header("Location: index.php");
        }
        exit(); 
    } else {
        header("Location: create.php?error"); 
        exit(); 
    }
}
?>
