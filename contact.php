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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
                write your information and we'll get in touch with you as soon as possible.
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
            marker.bindPopup("<b>VOSIMMO</b><br> Mrezgua , Nabeul 8050").openPopup();

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: '<a href="Main.php">VOSIMMO</a> &copy;  , For Preperty SALE and RENT',
                maxZoom: 20,
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
<?php
include('footer.php');
?>
<!--End Footer-->


<!-- Start Script -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script src="assets/js/immo.js"></script>
<!-- End Script -->

</body>
</html>
