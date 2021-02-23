<?php
//connect to data base
include("db_connect.php");

//Get Data form
$name = $_POST["name_sender"];
$email = $_POST["email_sender"];
$subject = $_POST["subject_sender"];
$message = $_POST["message_sender"];


$sql = "INSERT INTO msg (name_s, email, subject, message)
VALUES ('$name','$email','$subject','$message')";

if (mysqli_query($conn, $sql)) {
    $message = "Thankyou for your comment.";
    echo "<script type='text/javascript'>alert('$message');
window.location = '../contact.php'</script>";


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error();
}


?>
