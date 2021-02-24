<?php
include('phpConf/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VOS-IMMO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Files Links -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/immo.css">
    <!--fonts style -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">


</head>

<body>
<?php
include('header.php');
?>

<!-- Banners -->
<div id="immo-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#immo-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#immo-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#immo-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="First slide">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Find Your Dream House</b></h1>
                            <h3 class="h2">Welcome To VOS-IMMO.</h3>
                            <p>
                                VOS-IMMO give you the chance to Buy or Rent Your Dream House.<a
                                        class="text-success" href="Property.php" target="_blank"><br>Take Look </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="Second slide">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Exactly What You Need</h1>
                            <h3 class="h2">You Will Find What You Need And More! </h3>
                            <p>
                                With Us
                                You <strong>DREAMS</strong> Comes True!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="Third slide">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Even The Villa's </h1>
                            <h3 class="h2">Only In VO-IMMO </h3>
                            <p>
                                We Brings To You Lot Of Choices.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#immo-carousel" role="button"
       data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#immo-carousel" role="button"
       data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!--End Banner -->

<!-- Categories -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories</h1>
            <p>
                Find What You Need.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="Property.php?type=1"><img src="./assets/img/Sale.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Sale</h5>
            <p class="text-center"><a class="btn btn-success" href="Property.php?type=1">Look </a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="Property.php?type=0"><img src="./assets/img/Rent.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Rent</h2>
            <p class="text-center"><a class="btn btn-success" href="Property.php?type=10">Look </a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="Property.php?type=2"><img src="./assets/img/Vacation.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Vacation</h2>
            <p class="text-center"><a class="btn btn-success" href="Property.php?type=2">Look </a></p>
        </div>
    </div>
</section>
<!-- End Categories -->

<!-- Brokers -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">AGENTS</h1>
                <p>
                    Best Agents To Contact.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <img src="./assets/img/agent-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <a href="agent-contact.html" class="h2 text-decoration-none text-dark">Raed Mokni</a>
                        <p class="card-text"><br>
                            <b>Phone: </b>+216 20222125<br>
                            <b>Email: </b>Raed.Mokni@gmail.com
                        </p>
                        <a href="agent-contact.html" class="text-muted">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <img src="./assets/img/agent-5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <a href="agent-contact.html" class="h2 text-decoration-none text-dark">Sourour Saied</a>
                        <p class="card-text"><br>
                            <b>Phone: </b>+216 20222125<br>
                            <b>Email: </b>Sourour.Saied@gmail.com
                        </p>
                        <a href="agent-contact.html" class="text-muted">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <img src="./assets/img/agent-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <a href="agent-contact.html" class="h2 text-decoration-none text-dark">Ahmed Najar</a>
                        <p class="card-text"><br>
                            <b>Phone: </b>+216 20222125<br>
                            <b>Email: </b>NajarAhmed@gmail.com
                        </p>
                        <a href="agent-contact.html" class="text-muted">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Brokers -->

<!--Footer-->
<?php
include('footer.php');
?>
<!--End Footer-->

<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script src="assets/js/immo.js?v=2"></script>
<!-- End Script -->

</body>
</html>
