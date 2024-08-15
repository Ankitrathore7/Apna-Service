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
            /* Adjust size as needed */
            max-width: 100px;
            /* Maximum width */
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 50%;
            /* Makes the image round */
            margin-right: 5px;
            /* Add space to the right of the image */
        }

        .username {
            font-size: 1.2em;
            /* Adjust font size */
        }

        @media screen and (max-width: 768px) {
            .profile-pic {
                width: 20%;
                /* Adjust size for smaller screens */
                max-width: 80px;
                /* Maximum width */
            }
        }

        @media screen and (max-width: 480px) {
            .profile-container {
                flex-direction: column;
                align-items: center;
            }

            .profile-pic {
                margin-right: 0;
                /* Remove margin for smaller screens */
                margin-bottom: 10px;
                /* Add space below the image */
            }
        }

        @media only screen and (max-width: 575.98px) {
            .header-navbar-rht {
                margin-bottom: 50px;
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
                        <a href="index-3.php" class="navbar-brand logo">
                            <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a href="index-3.php" class="navbar-brand logo-small">
                            <img src="assets/img/logos/favicon.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>

                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index-3.php" class="menu-logo">
                                <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                    class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="index-3.php">Home </i></a>
                                <ul class="submenu mega-submenu">

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Services <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="cleaner-2.php">Cleaning</a></li>
                                    <li><a href="electrician-2.php">Electrical</a></li>
                                    <li><a href="car washer-2.php">Car Wash</a></li>
                                    <li><a href="chef-2.php">Catering</a></li>
                                    <li><a href="bueatician-2.php">beautician</a></li>
                                    <li><a href="mechanic-2.php">Appliance</a></li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="providers-2.php">Providers </a>

                            </li>
                            <li class="has-submenu">
                                <a href="about-us-2.php">about us </a>

                            </li class="has-submenu">

                            <li><a href="contact-us-2.php">Contact us</a></li>
                            <!-- <li class="login-link">
                                <a href="logout.php">Book Service</a>
                            </li> -->
                            <li class="login-link">
                                <a href="logout.php">Logout</a>
                            </li>

                        </ul>

                    </div>
                    <ul class="nav header-navbar-rht" id="profile-container">
                        <div class="nav header-navbar-rht">
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
                                    <li><a class="dropdown-item" href="pprofile.php"
                                            style="background-color: deeppink;">Profile</a>
                                    </li>
                                    <!-- Add more dropdown items here if needed -->
                                    <li>
                                        <!-- <hr class="dropdown-divider"> -->
                                    </li>
                                    <li><a class="dropdown-item" href="pbookings.php"
                                            style="background-color: deeppink;">My Bookings</a></li>
                                            <li><a class="dropdown-item" href="logout.php"
                                            style="background-color: deeppink;">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                    <!-- <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login"
                                href="book.php"><i
                                    class="feather-user"></i>
                                Book Service</a>
                        </li>
                    </ul> -->
                    <!-- <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="logout.php"><i class="feather-user"></i>
                                Logout</a>
                        </li>
                    </ul> -->
                </nav>

            </div>

        </header>

        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="breadcrumb-title mb-0"> Service Providers</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/krish.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Krish</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/ankit.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Ankit</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/parth.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Parth</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/tanishk.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Tanishk</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/aashish.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Aashish</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/Abdulla.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Mithaiwala</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/abhishek.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Abhi</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Car Washer</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/ajay.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Ajay</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/anamika.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Anamika</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Beautician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/ankit_p.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Ankit Patidar</a><i
                                                class="fa fa-check-circle" aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/arihant.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Arihant</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/anukul.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">anukul</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/bhavesh.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Bhavesh</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Car Washer</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/chaitanya.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">chaitanya</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/deepak.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">deepak</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Beautician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/harsh.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Harsh</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/Harshit_d.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Harshit</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/Harshit_s.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Harshit</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/jaswant.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Jaswant</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Car Washer</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/jatin.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Jatin</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/jay.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Jay</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/kishore.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Kishore</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/Kashish.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Kashish</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Beautician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/Lakshya.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Lakshya</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/lalit.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">lalit</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Car Washer</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/monil.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Monil</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/neha.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Neha</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Beautician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/priyansh.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Priyansh</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/rahul.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Rahul</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Car Washer</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/ramniwas.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Ramniwas</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/ravi.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Ravi</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Beautician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/rishab.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Rishab</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/rishab_k.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Krnawat</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/rohit.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Rohit</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/sourabh.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Sourabh</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Mechanic</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/s_heju.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Heju</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Car Washer</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/sandeep.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Sandeep</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/shobhit.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">shobhit</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/suhani.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Suhani</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Beautician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/sujal.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">sujal</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Cleaner</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/vishvjeet.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Vishvjeet</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/yash.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Yash</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>car Washer</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(400)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/shubhangi.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Shubhangi</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Beautician</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>Rs.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="#">
                                    <img src="assets/img/expert/satya.png" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="#">Satya</a><i class="fa fa-check-circle"
                                                aria-hidden="true"></i></h4>
                                        <span>Chef</span>
                                    </div>
                                    <div class="providerset-prices">
                                        <h6>RS.200<span>/hr</span></h6>
                                    </div>
                                </div>
                                <div class="provider-rating">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


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
                                        <a href="about-us-2.php">About Us</a>
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
                                        <a href="contact-us-2.php">Contact us</a>
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