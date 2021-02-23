<!--Top_Nav-->
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
                <div style="position: relative; ">
                    <?php
                    if (isset($_SESSION["login_user"])) {
                        ?>
                        <a class="btn btn-success compte-log" href="phpConf/logout.php" logout_btn
                           style="color: white; "
                        >Logout</a>

                        <a class="nav-icon  text-decoration-none" href="#">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"><?php echo $_SESSION['login_user']; ?></span>
                        </a>

                        <?php
                    } else { ?>
                        <a class="btn btn-success compte-log" login_btn style="color: white;"
                           href="Compte.php">Login</a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>

