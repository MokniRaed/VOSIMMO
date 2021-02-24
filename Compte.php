<?php
include('phpConf/session.php');
if (isset($_SESSION['login_user'])) {
    header("Location: Main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>


    <!--Files Links -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/compte.css">
    <link rel="stylesheet" href="assets/css/immo.css">
    <!--fonts style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--End fonts  -->

    <title>Login</title>
</head>
<body>

<!--Header-->
<?php
include('header.php');
?>
<!--End Header-->


<!-- Compete -->
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item text-center">
                <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                   aria-controls="pills-home" aria-selected="true">Login</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                   aria-controls="pills-profile" aria-selected="false">Signup</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <p class="login_messg">Please fill in your credentials to login.</p>
                <div class="form px-4 pt-4">
                    <form action="phpConf/Config.php" method="POST">
                        <input type="email" name="mail" class="form-control" placeholder="Your Email" required>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </form>
                </div>
                <p class="signup_p">Dont have an account? <a>Sign
                        up </a>.</p>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <p class="signup_messg">Please fill this form to create an account.</p>
                <div class="form px-4">
                    <form action="phpConf/registration.php" method="POST">
                        <input type="text" name="username" class="form-control" placeholder="Name" required>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="tel" name="phone" class="form-control" placeholder="Phone" maxlength="8"
                               pattern="[0-9]{2}[0-9]{3}[0-9]{3}" required>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <button type="submit" class="btn btn-dark btn-block">Signup</button>
                    </form>
                </div>
                <p class="login_p">Already have an account? <a>Login </a>.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Compete -->

<!--Footer-->
<?php
include('footer.php');
?>
<!--End Footer-->

</body>
</html>
