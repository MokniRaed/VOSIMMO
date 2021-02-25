<?php
//connect to data base
include("db_connect.php");

session_start();
$property_image = $_POST["Image_d"];
$property_price = $_POST["Price_d"];
$property_location = $_POST["Location_d"];
$property_type = $_POST["Type_d"];
$property_rate = $_POST["Rate_d"];
$property_etat = $_POST["Etat_d"];


$sql_d = "SELECT * FROM property WHERE img ='$property_image'";
$res_d = mysqli_query($conn, $sql_d);

if (mysqli_num_rows($res_d) == 0) {

    echo '<script>alert("This Property Does Not Exist To Delete!");
                window.location = \'Dashboard.php\';
</script>';


} else {

    $sql = "DELETE FROM property WHERE = $property_image";


    if (mysqli_query($conn, $sql)) {
        header('Location:../Dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error();
    }

}



