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

        .book {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .book h1 {
            margin-top: 0;
            font-size: 28px;
            color: #333;
        }

        .book form {
            margin-top: 20px;
        }

        .book label,
        select,
        button {
            display: block;
            margin-bottom: 10px;
        }

        .book select,
        button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 16px;
            color: #333;
        }

        .book button {
            cursor: pointer;
            background-color: deeppink;
            color: white;
            border: none;
        }

        .book button:hover {
            background-color: #45a049;
        }

        /* Table Styles */
        .book table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .book th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .book th {
            background-color: #f2f2f2;
        }

        .book img {
            max-width: 80px;
            height: auto;
            border-radius: 50%;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .book {
                width: 90%;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .book h1 {
                font-size: 24px;
            }

            .book select,
            button {
                font-size: 14px;
            }
        }

        /* styles.css */

        .table-container {
            overflow-x: auto;
            color: black;
        }

        .book-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-color: black;
        }

        .book-table th,
        .book-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .book-table th {
            background-color: #f2f2f2;
        }

        .book-table img {
            max-width: 80px;
            height: auto;
            border-radius: 50%;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .book-table {
                font-size: 14px;
            }

            .book-table th,
            .book-table td {
                padding: 8px;
            }

            .book-table img {
                max-width: 60px;
            }
        }

        @media (max-width: 480px) {
            .book-table {
                font-size: 12px;
            }

            .book-table img {
                max-width: 40px;
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
                                    <li><a class="dropdown-item" href="cprofile.php"
                                            style="background-color: deeppink;">Profile</a>
                                    </li>
                                    <!-- Add more dropdown items here if needed -->
                                    <li>
                                        <!-- <hr class="dropdown-divider"> -->
                                    </li>
                                    <li><a class="dropdown-item" href="cbookings.php"
                                            style="background-color: deeppink;">My Bookings</a></li>
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

        <div class="book">
            <h1>Book Service</h1>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="city">Select City:</label>
                <select name="city" id="city">
                    <option value="mandsaur">Mandsaur</option>
                    <option value="neemuch">Neemuch</option>
                    <option value="pipliamandi">Piplia Mandi</option>
                    <!-- Add more cities as needed -->
                </select>
                <label for="service">Select Service:</label>
                <select name="service" id="service">
                    <option value="Electrician">Electrician</option>
                    <option value="Cleaner">Cleaner</option>
                    <option value="Car Wash">Car Wash</option>
                    <option value="Catering">Catering</option>
                    <option value="Beautician">Beautician</option>
                    <option value="Applaince">Applaince</option>
                    <!-- Add more services as needed -->
                </select>
                <button type="submit" style="background-colo: deeppink" ;>Search</button>
            </form>
        </div>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "apnaservice";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve search parameters
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $city = $_POST['city'];
            $service = $_POST['service'];

            // SQL query
            $sql = "SELECT * FROM plogin WHERE city = '$city' AND service = '$service'";
            $result = mysqli_query($conn, $sql);

            // Check if any providers found
            if (mysqli_num_rows($result) > 0) {
                // Display providers in a table
                echo "<div class='table-container'>";
                echo "<table class='book-table'>";
                echo "<tr><th>Profile Pic</th><th>Name</th><th>Email</th><th>Service</th><th>Mobile</th><th>Action</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    // Output profile pic
                    $profilePicPath = $row['profile_pic'];
                    // Check if profile pic path already contains 'uploads/' prefix
                    if (strpos($profilePicPath, 'uploads/') === 0) {
                        echo "<td><img src='" . $profilePicPath . "' alt='" . $row['username'] . "'></td>";
                    } else {
                        echo "<td><img src='uploads/" . $profilePicPath . "' alt='" . $row['username'] . "'></td>";
                    }
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['service'] . "</td>";
                    echo "<td>" . $row['mobile'] . "</td>";


                    echo "<td><form method='post' action='appoinment.php'><input type='hidden' name='provider_id' value='" . $row['id'] . "'><button type='submit' style='background-color: deeppink;'>Book</button></form></td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            } else {
                echo "<p style='color: red;'>Sorry, No providers found for the selected city and service.</p>";
            }
        }

        // Close connection
        mysqli_close($conn);
        ?>






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
                                        <a href="about-us.html">About Us</a>
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
                                        <a href="contact-us.html">Contact us</a>
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

</html>