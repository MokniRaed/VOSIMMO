<?php

//connect to data base
include("db_connect.php");

// Selct Data from db
$sql = "SELECT * FROM property";
if (isset($_GET['type'])) {


    if ($_GET['type'] == '0') {
        $sql .= " WHERE type = 0  ";
    } elseif ($_GET['type'] == '1') {

        $sql .= " WHERE type = 1  ";
    }elseif ($_GET['type'] == '2') {

        $sql .= " WHERE type = 2  ";
    }

}
if (isset($_GET['px'])) {
    if ($_GET['px'] == '0') {

        $sql .= " ORDER BY prix desc ";

    } elseif ($_GET['px'] == '1') {

        $sql .= " ORDER BY prix asc  ";
    }
}
if (isset($_GET['etat'])) {

    if ($_GET['etat'] == '0') {

        $sql .= " WHERE etat = 0  ";

    } elseif ($_GET['etat'] == '1') {

        $sql .= " WHERE etat = 1  ";
    }
}
if (isset($_GET['rate'])) {

    if ($_GET['rate'] == '0') {

        $sql .= " WHERE rate = 0  ";

    } elseif ($_GET['rate'] == '1') {

        $sql .= " WHERE etat = 1  ";
    }
}


$result = $conn->query($sql);


?>
