<?php
include('db_connect.php');

session_start();
if(isset($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];
    $ses_sql = mysqli_query($conn, "select * from user where username = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
}



?>

