<?php 

include_once '../dbconnection.php';

$username = $_POST["username"]; 
$password = $_POST["password"];


    $sql = "SELECT * FROM users WHERE Username = '$username' AND (PasswordU = '$password');";
    $result = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_assoc($result);

  

    if (mysqli_num_rows($result) >= 1){
        
        header("location: ../index.php");  
        

        session_start();
        $_SESSION["username"] = $fetch["Username"];
        $_SESSION["nameu"] = $fetch["NameU"];
        $_SESSION["lastname"] = $fetch["Lastname"];
  
    }
       
    else { 
        
        echo "<script type='text/javascript'>alert('Wrong LogIn information. Please try again!');</script>";
        header("location: ../login.php?status=wronginfo"); }
       

    mysqli_close($conn); 
    
        
         ?>
