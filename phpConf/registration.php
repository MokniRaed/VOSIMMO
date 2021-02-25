<?php
//connect to data base
include("db_connect.php");

//Get Data form
$user = $_POST["username"];
$user_pass = $_POST["password"];
$user_phone = $_POST["phone"];
$user_mail = $_POST["email"];

$sql_e= "SELECT * FROM user WHERE email='$user_mail'";
$res_e = mysqli_query($conn, $sql_e);

if (mysqli_num_rows($res_e) > 0){

        echo '<script>alert("Email alrady taken");
                window.location = \'../Compte.php\';
</script>';


}else{

$sql = "INSERT INTO user (username, password, email, phone)
VALUES ('$user','$user_pass','$user_mail','$user_phone')";

    if (mysqli_query($conn, $sql)) {
        header('Location:../Compte.php');
    } else {
         echo "Error: " . $sql . "<br>" . mysqli_error();
    }

}

?>
