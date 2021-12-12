<?php 
session_start();


$username = $_SESSION["username"];
$question = $_POST["question"]; 


echo $username;
echo $question;


$host= "localhost";

$user="root";

$pwd="";

$db="mssn-project2122";



$conn = mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");



    $sql = "INSERT INTO `questions`(`username`, `question`) VALUES ('$username','$question')";



    $query = mysqli_query($conn, $sql);
    header("location: ../mssn-project2122/forum.php");

    
        
         ?>