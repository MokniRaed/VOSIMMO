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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/immo.css">
    <!--fonts style -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--End Fonts-->

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
            <div class="row" id="dtBasicExample">
                <?php
                $p = 0;
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $p++;
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
                        $s = 5 - $i;

                        for ($j = 0; $j < $s; $j++) {
                            echo '<i class="text-muted fa fa-star"></i>';
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
<?php
include('footer.php');
?>
<!--End Footer-->

<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script src="assets/js/immo.js?v=2"></script>




<!-- End Script -->
<!-- End Script -->

</body>
</html>
