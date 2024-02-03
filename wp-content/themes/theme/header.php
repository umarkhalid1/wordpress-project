<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CaterServ - Catering Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php bloginfo('template_directory') ;?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory') ;?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory') ;?>/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory') ;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory') ;?>/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="<?php echo home_url() ;?>" class="navbar-brand">
                    <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span> </h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'=>'primary-menu',
                                'menu_class'=>'nav'
                            )
                        )
                        ?>
                    </div>
                    <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                </div>
            </nav>
        </div>
    </div>