<?php
include('phpConf/session.php');
include('phpConf/db_property.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
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
include ("header.php")
?>

<!-- Modal -->
<div class="modal fade bg-white" id="immo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>



<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>About Us</h1>
                <p >
                    vos-immo is a marketplace where sellers can sell property or cater to those wish to rent a house. We know that renting and selling property
                    is not easy. So, this platform is made to ensure that verified listings attract genuine buyers and customers. Partner with vos-immo, post
                    property for sale or post rent ad for free and enjoy the benefits of partnering with us. We help you find joy and more.
                    vos-immo is the most preferred property website among buyers. When you join us, you get connected with only genuine buyers. Start today.
                     </p>
            </div>
            <div class="col-md-4">
                <img src="assets/img/about.png" width="600" alt="About Hero">
            </div>
        </div>
    </div>
</section>
<!-- Close Banner -->

<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto service_parg">
            <h1 class="h1">Our Services</h1>
            <p >
                vos-immo is a marketplace where sellers can sell property to those wish to rent a house. We know that buying and selling property
                is not easy. So, this platform is made to ensure that verified listings attract genuine buyers and customers. Partner with Makaan.com,
                post property for sale or post rent ad for free and enjoy the benefits of partnering with us. We help you find joy and more.
                vos-immo is the most preferred property website among buyers. When you join us, you get connected with only genuine buyers. Start today.
            </p>
        </div>
    </div>
    <div  class="row">

        <div class="col-md-6 col-lg-4 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-check-circle fa-2x"></i></div>
                <h1 class="h5 mt-4 text-center">Unlimited <p class="mt-3"> free listings</p></h1>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fas fa-check-circle fa-2x"></i></div>
                <h1 class="h5 mt-4 text-center">Pay <p class="mt-3"> as you earn </p> </h1>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-check-circle fa-2x"></i></div>
                <h1 class="h5 mt-4 text-center">Stand out <p class="mt-3" > amongst peers </p></h1>
            </div>
        </div>

    </div>
</section>
<!-- End Section -->
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
