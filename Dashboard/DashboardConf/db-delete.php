<?php
//connect to data base
include("db_connect.php");

session_start();

$checkbox1 = $_POST['options'];

$chk = "";

foreach ($checkbox1 as $chk1) {
    $chk .= $chk1 . ",";
}


$sql_d = "SELECT * FROM property WHERE img ='$chk'";
$res_d = mysqli_query($conn, $sql_d);

if (mysqli_num_rows($res_d) == 0) {

    echo '<script>alert("This Property Does Not Exist To Delete!");
                window.location = \'../Dashboard.php\';
            </script>';


} else {

    $sql = "DELETE FROM property WHERE = $chk";


    if (mysqli_query($conn, $sql)) {
        header('Location:../Dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error();
    }

}



