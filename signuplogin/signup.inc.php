 <?php

include_once 'functions.php';
include_once '../dbconnection.php';

    if(isset($_POST["submit"])) {

        $name = $_POST["name"]; 
        $lastname = $_POST["lastname"]; 
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"]; 
      
    if (usernameExists($conn, $username) !== false) 
        { header("location: ../signup.php?error=usernametaken"); 
            exit(); }

        
    createUser($conn, $name, $lastname, $email, $username, $password); 

    } 

    else  header("location: ../signup.php?error");

?>
