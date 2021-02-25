<?php
include("db_connect.php");
session_start();

$property_image = $_POST["Image_c"];
$property_price = $_POST["Price_c"];
$property_location = $_POST["Location_c"];
$property_type = $_POST["Type_c"];
$property_rate = $_POST["Rate_c"];
$property_etat = $_POST["Etat_c"];


$sql_c = "SELECT * FROM property WHERE img ='$property_image'";
$res_c = mysqli_query($conn, $sql_c);

if (mysqli_num_rows($res_c) > 0) {

    echo '<script>alert("This Property Already Exist!");
                window.location = \'Dashboard.php\';
</script>';


} else {

    $sql = "INSERT INTO property (img, prix, location, type, rate, etat)
VALUES ('$property_image','$property_price','$property_location','$property_type','$property_rate','$property_etat')";

    if (mysqli_query($conn, $sql)) {
        header('Location:../Dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error();
    }

}
