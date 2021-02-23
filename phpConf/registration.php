<?php
//connect to data base
include("db_connect.php");

//Get Data form
$user = $_POST["username"];
$user_pass = $_POST["password"];
$user_phone = $_POST["phone"];
$user_mail = $_POST["email"];


$sql = "INSERT INTO user (username, password, email, phone)
VALUES ('$user','$user_pass','$user_mail','$user_phone')";

if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('$message');";
    header('Location:../Compte.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error();
}


?>
