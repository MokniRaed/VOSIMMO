<?php
//connect to data base
include("db_connect.php");

session_start();

$property_image = $_POST["Image_u"];
$property_price = $_POST["Price_u"];
$property_location = $_POST["Location_u"];
$property_type = $_POST["Type_u"];
$property_rate = $_POST["Rate_u"];
$property_etat = $_POST["Etat_u"];


$sql_u = "SELECT * FROM property WHERE img ='" . $_GET['update'] . "'";
$res_u = mysqli_query($conn, $sql_u);

if (mysqli_num_rows($res_u) < 0) {

    echo '<script>alert("This Property Does Not Exist To Update!");
                window.location = \'Dashboard.php\';
</script>';


} else {

    $sql = "UPDATE property SET img = '$property_image',
                                    prix = '$property_price',
                                     location = '$property_location',
                                      type = '$property_type',
                                       rate = '$property_rate',
                                        etat = '$property_etat' WHERE img ='" . $_GET['update'] . "'";


    if (mysqli_query($conn, $sql)) {
        header('Location:../Dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error();
    }

}



