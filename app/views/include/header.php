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
        <link href="public/CRS1/lib/animate/animate.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="public/CRS1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="public/CRS1/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
      Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/home" class="nav-item nav-link active">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/service" class="nav-item nav-link">Services</a>
                            <a href="/event" class="nav-item nav-link">Events</a>
                            <a href="/menu" class="nav-item nav-link">Menu</a>
                            <hr>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="/book" class="dropdown-item">Booking</a>
                                    <a href="/blog" class="dropdown-item">Our Blog</a>
                                    <a href="/team" class="dropdown-item">Our Team</a>
                                    <a href="/testimonial" class="dropdown-item">Testimonial</a>
                                </div>
                            </div>
                            <hr>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="/book" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                        <hr>
                        <a href="/logout" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Logout</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->