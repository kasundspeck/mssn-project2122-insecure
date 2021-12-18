<?php 
session_start();

include_once '../dbconnection.php';

$username = $_SESSION["username"];
$question = $_POST["question"]; 


$conn = mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");



    $sql = "INSERT INTO `questions`(`username`, `question`) VALUES ('$username','$question')";



    $query = mysqli_query($conn, $sql);
    header("location: ../forum.php");

    
        
         ?>