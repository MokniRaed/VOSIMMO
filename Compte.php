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


    <title>Login</title>
</head>
<body>

<!--Header-->

<?php
include('header.php');
?>

<!--And Header-->


<!-- Compte -->
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

<!-- And Compte -->

<!--Footer-->
<footer class="bg-dark" id="immo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">VOS-IMMO</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        8050 Mrezgua,Nabeul
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:+21653331981">+216 53 331 981 </a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@vos-immo.com">info@vos-immo.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Property</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Luxury Villa</a></li>
                    <li><a class="text-decoration-none" href="#">House</a></li>
                    <li><a class="text-decoration-none" href="#">Apartment</a></li>
                    <li><a class="text-decoration-none" href="#">Bungalow</a></li>
                    <li><a class="text-decoration-none" href="#">Guest house</a></li>

                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="Main.php">Home</a></li>
                    <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                    <li><a class="text-decoration-none" href="#">Agents Locations</a></li>
                    <li><a class="text-decoration-none" href="#">FAQs</a></li>
                    <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i
                                    class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="subscribeEmail">Email address</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"
                           placeholder="Email address">
                    <div class="input-group-text btn-success text-light"><a class="text-decoration-none" onclick="">
                            Subscribe</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2021 VOS-IMMO
                        | Designed by <a rel="sponsored" href="https://fb.com/mokniraed" target="_blank">Mokni Raed</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- And Footer-->

</body>
</html>
