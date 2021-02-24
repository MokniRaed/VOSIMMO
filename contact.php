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
    <!--END Files Links -->

    <!--fonts style -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>

    <!--END fonts style -->


</head>

<body>

<!--Header-->

<?php
include('header.php');
?>

<!--End Header-->

<!--Contact-->
<div class="contact-box-main">
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">GET IN TOUCH</h1>
            <p>
                Did you want a beautiful house with a convenient price?
                Vos-immo is the best destination for you to find the house your dream of!
                write your information and we'll get in touch with you as soon as possible
            </p>
        </div>
    </div>

    <div class="col-lg-8 col-sm-12 p-4 contact-form">

        <form id="contactForm" action="phpConf/send_msg.php" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name_sender"
                               placeholder="Your Name" required data-error="Please enter your name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" id="email" class="form-control"
                               name="email_sender" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject_sender"
                               placeholder="Subject" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="4"
                                              data-error="Write your message" name="message_sender" required></textarea>
                    </div>
                    <div class="submit-button text-center">
                        <button type="submit" class="btn btn-success">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Start Map -->

    <div class="col-lg-8 col-sm-12 p-4 contact-form">
        <div id="mapid"></div>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
        <script>
            var mymap = L.map('mapid').setView([36.427486, 10.673263], 14);
            var marker = L.marker([36.427486, 10.673263]).addTo(mymap);
            marker.bindPopup("<b>VOSIMMO</b> Property Company.").openPopup();

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: '<a href="Main.php">VOSIMMO</a> &copy;  , For Preperty SALE and RENT',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoicmFlZG1va25pIiwiYSI6ImNrbGpnYWw4ZTJtNGwydXM0dDE1djNqY3EifQ.boAPn5x9Rv1KG_xqit_Amg'
            }).addTo(mymap);
        </script>
    </div>

    <!-- Ena Map -->

</div>

<!--End Contact-->

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

<!-- Start Script -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/immo.js"></script>
</body>
</html>
