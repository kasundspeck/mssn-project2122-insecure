<?php 
session_start();


$qid = $_GET["qid"];
$comment = $_POST["comment"]; 
$username = $_SESSION["username"];

echo $qid;
echo $comment;
echo $username;


$host= "localhost";

$user="root";

$pwd="";

$db="mssn-project2122";



$conn = mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");



    $sql = "INSERT INTO `comments`(`question_id`, `username`, `message`) VALUES ('$qid','$username','$comment')";



    $query = mysqli_query($conn, $sql);

    header("location: ../mssn-project2122/select_question.php?qid=" .$qid);



    
        
         ?>