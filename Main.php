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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/immo.css">
    <!--fonts style -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/immo.js?v=2"></script>


</head>

<body>
<?php
include('header.php');
?>
<!--Search-Modal-->


<!-- banners -->

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
                            <h1 class="h1 text-success"><b>Trouvez La Maison De Vos Reves</b></h1>
                            <h3 class="h2">Welcome To VOS-IMMO.</h3>
                            <p>
                                VOS-IMMO vous donnez la chance d'achetez ou de louez la maison de vos reves.<a
                                        class="text-success" href="Property.php" target="_blank">Voir Plus</a>
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
                                We Bring To Your Alot Of Choces.

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
            <p class="text-center"><a class="btn btn-success">Voir</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="Property.php?type=0"><img src="./assets/img/Rent.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Rent</h2>
            <p class="text-center"><a class="btn btn-success">Voir</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./assets/img/Vacation.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Vacation</h2>
            <p class="text-center"><a class="btn btn-success">Voir</a></p>
        </div>
    </div>
</section>
<!-- Brockers -->
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

                        <a href="agent-contact.html" class="h2 text-decoration-none text-dark">Sourour Ben</a>
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
                    <li><a class="text-decoration-none" href="#">Appartement</a></li>
                    <li><a class="text-decoration-none" href="#">Bengalos</a></li>
                    <li><a class="text-decoration-none" href="#">Maison D'Haute</a></li>

                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Home</a></li>
                    <li><a class="text-decoration-none" href="#">About Us</a></li>
                    <li><a class="text-decoration-none" href="#">Agents Locations</a></li>
                    <li><a class="text-decoration-none" href="#">FAQs</a></li>
                    <li><a class="text-decoration-none" href="#">Contact</a></li>
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
</body>
</html>
