<?php 
session_start();

include_once '../dbconnection.php';

$qid = $_GET["qid"];
$comment = $_POST["comment"]; 
$username = $_SESSION["username"];

$conn = mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");



    $sql = "INSERT INTO `comments`(`question_id`, `username`, `message`) VALUES ('$qid','$username','$comment')";



    $query = mysqli_query($conn, $sql);

    header("location: ../select_question.php?qid=" .$qid);



    
        
         ?>