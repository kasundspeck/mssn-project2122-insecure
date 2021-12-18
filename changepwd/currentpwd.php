<?php

session_start(); 
include_once '../dbconnection.php';
 
$currpassword = $_POST["currpassword"];

        $username = $_SESSION["username"];
 

    $query = "SELECT * FROM users WHERE Username = '$username' AND PasswordU = '$currpassword'";

    $result = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($result);
    
    if (mysqli_num_rows($result) == 1){
        
        header("location: ../newpassword.php");  
    
    }
       
    else { 
        
        header("location:../changepassword.php?error=fail"); }
       

    mysqli_close($conn); 
    
        
?>