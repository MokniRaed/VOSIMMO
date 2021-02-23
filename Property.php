<?php
include('phpConf/session.php');
include('phpConf/db_property.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Property</title>
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

<!-- Content -->
<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled immo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Type
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="Property.php?type=1">For Sale</a></li>
                        <li><a class="text-decoration-none" href="Property.php?type=0">For Rent</a></li>
                        <li><a class="text-decoration-none" href="Property.php?type=2">For Vacation</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Pricing
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="Property.php?px=0">Higher</a></li>
                        <li><a class="text-decoration-none" href="Property.php?px=1">Lower</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        New/Old
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseThree" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="Property.php?etat=1">New</a></li>
                        <li><a class="text-decoration-none" href="Property.php?etat=0">Old</a></li>

                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline property-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="Property.php">All</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="Property.php?type=0">Rent It</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none" href="Property.php?type=1">Sale It</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="d-flex">
                        <select class="form-control">
                            <option>Featured</option>
                            <option>Low to High</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                        echo "<div class=\"col-md-4\">
                    <div class=\"card mb-4 property-wap rounded-0\">
                        <div class=\"card rounded-0\">
                            <img class=\"card-img rounded-0 img-fluid\" src=\"assets/img/" . $row['img'] . ".jpg\">
                            <div class=\"card-img-overlay rounded-0 property-overlay d-flex align-items-center justify-content-center\">
                                <ul class=\"list-unstyled\">
                                    <li><a class=\"btn btn-success text-white\" href=\"property-single.php\"><i
                                                    class=\"far fa-heart\"></i></a></li>
                                    <li><a class=\"btn btn-success text-white mt-2\" href=\"property-single.php\"><i
                                                    class=\"far fa-eye\"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <a href=\"property-single.php\" class=\"h3 text-decoration-none\">" . $row['location'] . "</a>
                            <ul class=\"w-100 list-unstyled d-flex justify-content-between mb-0\">";
                        if ($row['type'] == 1) {
                            echo "<li>Sale</li>";
                        } else {
                            echo "<li>Rent</li>";
                        }

                        echo "
                                <li class=\"pt-2\">
                                    <span class=\"property-color-dot color-dot-red float-left rounded-circle ml-1\"></span>
                                    <span class=\"property-color-dot color-dot-blue float-left rounded-circle ml-1\"></span>
                                    <span class=\"property-color-dot color-dot-black float-left rounded-circle ml-1\"></span>
                                    <span class=\"property-color-dot color-dot-light float-left rounded-circle ml-1\"></span>
                                    <span class=\"property-color-dot color-dot-green float-left rounded-circle ml-1\"></span>
                                </li>
                            </ul>
                            <ul class=\"list-unstyled d-flex justify-content-center mb-1\">
                                <li>";
                        for ($i = 0; $i < ($row['rate']); $i++) {
                            echo "
                                    <i class=\"text-warning fa fa-star\"></i>";
                        }
                        "</li>
                            </ul>";

                        echo "<p class=\"text-center mb-0\">" . $row['prix'] . " DT </p>";

                        echo "
                        </div>
                    </div>
                </div>";
                    }
                }
                ?>
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                           tabindex="-1">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                           href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- End Content -->
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

</body>
</html>
