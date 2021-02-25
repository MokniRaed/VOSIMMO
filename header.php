<!--Top_Nav-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="immo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:raedmokni2@gmail.com">raedmokni2@gmail.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:+216 20 986 982">+216 53 331
                    981</a>
            </div>
            <div>
                <a class="text-light" href="https://fb.com/" target="_blank" rel="sponsored"><i
                            class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i
                            class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i
                            class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i
                            class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>

<!--Header-->
<nav class="navbar navbar-expand-lg navbar-light shadow ">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="Main.php">
            <img height="80" width="80" src="assets/img/apple-icon.png">
            VOS-IMMO
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#immo_main_nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
             id="immo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Main.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Property.php">Property</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center ">
                <div style="; display: flex;flex-direction: column; ">

                    <?php
                    if (isset($_SESSION["login_user"])) {
                        ?>
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-sm dropdown-toggle text-light btn-success"
                                    type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class=" fa fa-fw fa-user "></i>
                                <?php echo $_SESSION['login_user']; ?>
                            </button>
                            <div class="dropdown-menu ">
                                <p class="text-center">
                                    <button class=" btn btn-outline-danger"
                                            onclick="window.location.href='phpConf/logout.php'"
                                    >Logout
                                    </button>
                                </p>


                            </div>
                        </div>
                        <?php
                    } else { ?>
                        <a class="btn btn-success text-light "
                           href="Compte.php">Login</a>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</nav>
<!--End Header-->

