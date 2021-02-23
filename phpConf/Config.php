<?php
//connect to data base
include("db_connect.php");
//Login
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($conn, $_POST['mail']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM user WHERE email = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);


    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['login_user'] = $myusername;

        header("location: ../Main.php");
    } else {
        echo '<script language="javascript">;
                alert("Check Login Or Password ");
                window.location = \'../Compte.php\';
                
                </script>';
    }
}

?>
