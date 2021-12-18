<?php

session_start(); 
include_once '../dbconnection.php';
 
$newpassword = $_POST["newpassword"];
$username = $_SESSION["username"];

        $query = "UPDATE users SET PasswordU = '$newpassword' WHERE Username = '$username'";

        $result = mysqli_query($conn, $query);

        if($result){

            header("location: ../settings.php?status=newpwd");  

        }
        
        else { echo $username, $newpassword;}
    
?>