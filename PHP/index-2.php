<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['profile_pic'])) {
    // Redirect to login page if not logged in

}

// Get username and profile picture from session
$username = $_SESSION['username'];
$profile_pic = $_SESSION['profile_pic'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Apna Services</title>

    <link rel="shortcut icon" href="assets/img/logos\favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/slider.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH">
    <style>
        .profile-container {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #f0f0f0;
        }

        .profile-pic {
            width: 10%;
            max-width: 100px;
            height: auto;
            border-radius: 50%;
            margin-right: 10px;
        }

        .username {
            font-size: 1.2em;
        }

        @media screen and (max-width: 768px) {
            .profile-pic {
                width: 20%;
                max-width: 80px;
            }
        }

        @media screen and (max-width: 480px) {
            .profile-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-pic {
                margin-bottom: 10px;
                margin-right: 0;
                /* Remove right margin for smaller screens */
            }

        }

        @media only screen and (max-width: 575.98px) {
            .header-navbar-rht {
                margin-bottom: 50px;
            }
        }



        .dropdown-menu {
            width: 200px;
            /* Adjust the width as needed */
        }

        @media (max-width: 576px) {
            .dropdown-menu {
                width: 100%;
                /* Make the dropdown menu full width on smaller screens */
            }
        }

        @media (max-width: 992px) {
            .dropdown-menu {
                left: auto;
                right: 0;
                /* Align the dropdown menu to the right on medium screens */
            }
        }
    </style>


</head>

<body>

    <div class="main-wrapper">

        <header class="header header-two">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">

                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index-2.php" class="navbar-brand logo">
                            <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a href="index-2.php" class="navbar-brand logo-small">
                            <img src="assets/img/logos/favicon.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>

                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index-2.php" class="menu-logo">
                                <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                    class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="index-2.php">Home </i></a>
                                <ul class="submenu mega-submenu">

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Services <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="cleaner.php">Cleaning</a></li>
                                    <li><a href="electrician.php">Electrical</a></li>
                                    <li><a href="car washer.php">Car Wash</a></li>
                                    <li><a href="chef.php">Catering</a></li>
                                    <li><a href="bueatician.php">beautician</a></li>
                                    <li><a href="mechanic.php">Appliance</a></li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="providers.php">Providers </a>

                            </li>
                            <li class="has-submenu">
                                <a href="about-us.php">about us </a>

                            </li class="has-submenu">

                            <li><a href="contact-us.php">Contact us</a></li>
                            <li class="login-link">
                                <a href="logout.php">Book Service</a>
                            </li>
                            <li class="login-link">
                                <a href="logout.php">Logout</a>
                            </li>

                        </ul>

                    </div>
                    <ul class="nav header-navbar-rht" id="profile-container">
                        <div class="nav header-navbar-rht" id="profile-container2">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="profileDropdownLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- Adjust the size of the profile picture -->
                                    <img class="profile-pic" src="<?php echo $profile_pic; ?>" alt="Profile Picture"
                                        style="width: 40px; height: 40px; border-radius: 50%;">
                                    <span
                                        style="text-transform: capitalize; color: midnightblue; font-weight: bold;"><?php echo $username; ?></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdownLink">
                                    <li><a class="dropdown-item"
                                            href="cprofile.php" style="background-color: deeppink;">Profile</a>
                                    </li>
                                    <!-- Add more dropdown items here if needed -->
                                    <li>
                                        <!-- <hr class="dropdown-divider"> -->
                                    </li>
                                    <li><a class="dropdown-item" href="cbookings.php" style="background-color: deeppink;">My Bookings</a></li>
                                    <li><a class="dropdown-item" href="logout.php"
                                            style="background-color: deeppink;">Logout</a></li>
                                </ul>
                            </div>
                        </div>

                    </ul>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="book.php"><i class="feather-user"></i>
                                Book Service</a>
                        </li>
                    </ul>
                    <!-- <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="logout.php"><i class="feather-user"></i>
                                Logout</a>
                        </li>
                    </ul> -->
                </nav>

            </div>

        </header>

        <section>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <a href="book.php"> <img src="assets/img/services/service-82.png" class="d-block w-100"
                                alt="..."></a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="bueatician.php"><img src="assets/img/services/service-83.png" class="d-block w-100"
                                alt="..."></a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="mechanic.php"> <img src="assets/img/services/service-86.png" class="d-block w-100"
                                alt="..."></a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="car washer.php"> <img src="assets/img/services/service-85.png" class="d-block w-100"
                                alt="..."></a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="chef.php"> <img src="assets/img/services/service-87.png" class="d-block w-100"
                                alt="..."></a>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href="cleaner.php"><img src="assets/img/services/service-84.png" class="d-block w-100"
                                alt="..."></a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



        </section>



        <section class="feature-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="section-heading-two">
                            <h2>Featured Categories</h2>
                            <p>What do you need to find?</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-widget">
                            <div class="feature-img">
                                <a href="cleaner.html">
                                    <img src="assets/img/services/service-09.jpg" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/img/icons/feature-icon-12.svg" alt="img">
                                </span>
                                <div class="feature-title">
                                    <h5>Cleaning</h5>
                                    <p>07 Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-widget">
                            <div class="feature-img">
                                <a href="electrician.html">
                                    <img src="assets/img/services/service-01.jpg" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/img/icons/feature-icon-13.svg" alt="img">
                                </span>
                                <div class="feature-title">
                                    <h5>Electrical</h5>
                                    <p>08 Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-widget">
                            <div class="feature-img">
                                <a href="car washer.html">
                                    <img src="assets/img/services/service-08.jpg" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/img/icons/feature-icon-11.svg" alt="img">
                                </span>
                                <div class="feature-title">
                                    <h5>Car Wash</h5>
                                    <p>07 Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-widget">
                            <div class="feature-img">
                                <a href="chef.html">
                                    <img src="assets/img/services/service-80.jpg" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/img/icons/cooking.svg" alt="img">
                                </span>
                                <div class="feature-title">
                                    <h5>Cooking</h5>
                                    <p>08 Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-widget">
                            <div class="feature-img">
                                <a href="bueatician.html">
                                    <img src="assets/img/services/service-81.jpg" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/img/icons/salon.svg" alt="img">
                                </span>
                                <div class="feature-title">
                                    <h5>beautician</h5>
                                    <p>08 Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-widget">
                            <div class="feature-img">
                                <a href="mechanic.html">
                                    <img src="assets/img/services/service-16.jpg" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/img/icons/AC.svg" alt="img">
                                </span>
                                <div class="feature-title">
                                    <h5>Appliance</h5>
                                    <p>06 Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>




        <section class="work-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading sec-header aos" data-aos="fade-up">
                            <h2>How It Works</h2>
                            <p>Aliquam lorem ante, dapibus in, viverra quis</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="work-wrap-box work-first aos" data-aos="fade-up">
                            <div class="work-icon">
                                <span>
                                    <img src="assets/img/icons/work-icon-01.svg" alt="img">
                                </span>
                            </div>
                            <h5>Find the service you want</h5>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work-wrap-box work-last aos" data-aos="fade-up">
                            <div class="work-icon">
                                <span>
                                    <img src="assets/img/icons/work-icon-02.svg" alt="img">
                                </span>
                            </div>
                            <h5>Choose the expert</h5>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work-wrap-box aos" data-aos="fade-up">
                            <div class="work-flex">
                                <div class="work-icon">
                                    <span>
                                        <img src="assets/img/icons/work-icon-03.svg" alt="img">
                                    </span>
                                </div>
                                <h5>finalize the Appointment</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="providers-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="section-heading-two white-text">
                            <h2>Top Providers</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="providers.html" class="btn btn-pink btn-viewall">View All<i
                                class="feather-arrow-right-circle"></i></a>
                    </div>
                </div>
                <div class="row  aos" data-aos="fade-up">
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset provider-box">
                            <div class="providerset-img">
                                <a href="providers.php">
                                    <img src="assets/img/expert/krish.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="providers.php">Krish</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <a href="providers.php" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset provider-box">
                            <div class="providerset-img">
                                <a href="providers.php">
                                    <img src="assets/img/expert/ankit.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="providers.php">Ankit</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <a href="providers.php" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset provider-box">
                            <div class="providerset-img">
                                <a href="providers.php">
                                    <img src="assets/img/expert/parth.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="providers.php">Parth</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <a href="providers.php" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset provider-box">
                            <div class="providerset-img">
                                <a href="providers.php">
                                    <img src="assets/img/expert/tanishk.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="providers.php">Tanishk</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <a href="providers.php" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="price-sections">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center aos" data-aos="fade-up">
                        <div class="section-heading sec-header">
                            <h2>Pricing Plans</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>

                <div class="row aos" data-aos="fade-up">
                    <div class="col-lg-4 col-sm-12">
                        <div class="pricing-plans price-new">
                            <div class="pricing-planshead">
                                <h6>Rs.500<span>/month</span></h6>
                                <h4>Starter</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            </div>
                            <div class="pricing-planscontent">
                                <ul>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Sed perspiciatis unde omnis natus error</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Lorem dolor consecteturadipiscing elit</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Duis irure dolor reprehenderit voluptate</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Nemo enim ipsam voluptatem quia </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Sed perspiciatis iste natus error </span>
                                    </li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="#" class="btn btn-view">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="pricing-plans price-new active">
                            <div class="pricing-planshead">
                                <div class="price-block">
                                    <span class="popular">MOST POPULAR</span>
                                </div>
                                <h6>Rs.1000<span>/month</span></h6>
                                <h4>Company</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            </div>
                            <div class="pricing-planscontent">
                                <ul>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Sed perspiciatis unde omnis natus error</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Lorem dolor consecteturadipiscing elit</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Duis irure dolor reprehenderit voluptate</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Nemo enim ipsam voluptatem quia </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Sed perspiciatis iste natus error </span>
                                    </li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="#" class="btn btn-view">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="pricing-plans price-new">
                            <div class="pricing-planshead">
                                <h6>Rs.200<span>/month</span></h6>
                                <h4>Professional</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            </div>
                            <div class="pricing-planscontent">
                                <ul>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Sed perspiciatis unde omnis natus error</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Lorem dolor consecteturadipiscing elit</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Duis irure dolor reprehenderit voluptate</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Nemo enim ipsam voluptatem quia </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle me-2"></i>
                                        <span>Sed perspiciatis iste natus error </span>
                                    </li>
                                </ul>
                                <div class="pricing-btn">
                                    <a href="#" class="btn btn-view">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="client-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading sec-header aos" data-aos="fade-up">
                            <h2>Testimonials</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel client-slider">
                            <div class="client-box aos" data-aos="fade-up">
                                <div class="client-content">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <h6>“Quality service”</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi </p>
                                </div>
                                <div class="client-img">
                                    <a href="#">
                                        <img class="img-fluid" alt="Image" src="assets/img/profiles/avatar-01.jpg">
                                    </a>
                                    <div class="client-name">
                                        <h5>Sophie Moore</h5>
                                        <h6>Developer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box aos" data-aos="fade-up">
                                <div class="client-content">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <h6>“The best service”</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi </p>
                                </div>
                                <div class="client-img">
                                    <a href="#">
                                        <img class="img-fluid" alt="Image" src="assets/img/profiles/avatar-02.jpg">
                                    </a>
                                    <div class="client-name">
                                        <h5>Mike Hussy</h5>
                                        <h6>Tech Lead</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box aos" data-aos="fade-up">
                                <div class="client-content">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <h6>“Service is good”</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi </p>
                                </div>
                                <div class="client-img">
                                    <a href="#">
                                        <img class="img-fluid" alt="Image" src="assets/img/profiles/avatar-03.jpg">
                                    </a>
                                    <div class="client-name">
                                        <h5>Tom Beker</h5>
                                        <h6>CEO</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box aos" data-aos="fade-up">
                                <div class="client-content">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <h6>“Good Maintanence”</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi </p>
                                </div>
                                <div class="client-img">
                                    <a href="#">
                                        <img class="img-fluid" alt="Image" src="assets/img/profiles/avatar-04.jpg">
                                    </a>
                                    <div class="client-name">
                                        <h5>Nick John</h5>
                                        <h6>Director</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="section-offer">
            <div class="container">
                <div class="row  aos" data-aos="fade-up">
                    <div class="col-md-12">
                        <div class="offer-paths offer-sec">
                            <div class="offer-path-content">
                                <div class="section-heading-two">
                                    <p>Get Your First Service Free</p>
                                    <h3 class="mb-0">We Are Offering your first service free</h3>
                                </div>

                                <a href="#" class="btn btn-views">Get your free service<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                            <div class="offer-pathimg">
                                <img src="assets/img/offer-img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer footer-two">

            <div class="footer-top aos" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logos/logo.png" alt="logo"></a>
                                </div>

                                <div class="footer-widget footer-contact">
                                    <div class="footer-contact-info">
                                        <div class="footer-address">
                                            <span><i class="feather-phone-call"></i></span>
                                            <div>
                                                <h6>Tel</h6>
                                                <p>8989687305</p>
                                            </div>
                                        </div>
                                        <div class="footer-address">
                                            <a href="mailto:apnaservicecontact@gmail.com"><span><i
                                                        class="feather-mail"></i></span>
                                                <div>
                                                    <h6>Email Address</h6>
                                                    <p>apnaservicecontact@gmail.com</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="footer-address">
                                            <a href="https://maps.app.goo.gl/Aa6N4wfwP3G5wRpR8" target="_blank">
                                                <span><i class="feather-map-pin"></i></span>
                                                <div>
                                                    <h6>Address</h6>
                                                    <p>Mandsaur, Madhya Pradesh, India</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Company</h2>
                                <ul>
                                    <li>
                                        <a href="about-us.php">About Us</a>
                                    </li>

                                    <a href="#">Gallery</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Quick Links</h2>
                                <ul>
                                    <li>
                                        <a href="contact-us.php">Contact us</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">



                        </div>
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget">
                                <h2 class="footer-title">Instagram Feed</h2>
                                <ul class="row insta-row">
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-01.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-02.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-03.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-04.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-05.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-06.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-07.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-08.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="col-3 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/services/service-09.jpg" alt="Instagram Image"
                                                class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container">

                    <div class="copyright">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="payment-image">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-01.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-02.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-03.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-04.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-05.png"
                                                    alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/card-06.png"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">

                                <div class="copyright-text">
                                    <p class="mb-0">Copyright &copy; 2024. All Rights Reserved.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>


        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/owl.carousel.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/plugins/aos/aos.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/slick.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/backToTop.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>

    <script src="assets/js/script.js" type="1271a8878c82b706c8b95fbf-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="1271a8878c82b706c8b95fbf-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 11:35:33 GMT -->
<!-- ankit -->
</html>