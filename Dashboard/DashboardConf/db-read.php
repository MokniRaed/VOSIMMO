<?php

//connect to data base
include("DashboardConf/db_connect.php");

// Selct Data from db
$sql = "SELECT * FROM property";

$result_r = $conn->query($sql);

?>

