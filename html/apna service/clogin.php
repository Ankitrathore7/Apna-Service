<?php
// Start session
session_start();

// Connect to the database
$host = 'localhost';
$db = 'apnaservice';
$user = 'root';
$password = '';

$conn = mysqli_connect($host, $user, $password, $db);


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for the user
    $query = "SELECT * FROM plogin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // User found, set session variables
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $user['username'];
        $_SESSION['profile_pic'] = $user['profile_pic'];
        // Redirect to index.php
        header("Location: index-2.php");
        exit();
    } else {
        // User not found, redirect to login page with error message
        echo "<script>alert('Login failed. Username $ password not match');</script>";
    }
}
?>

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

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="login-body">
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
                        <a href="index.html" class="navbar-brand logo">
                            <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a href="index.html" class="navbar-brand logo-small">
                            <img src="assets/img/logos/favicon.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="assets/img/logos/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                    class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="index.html">Home </i></a>
                                <ul class="submenu mega-submenu">

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Services <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="cleaner.html">Cleaning</a></li>
                                    <li><a href="electrician.html">Electrical</a></li>
                                    <li><a href="car washer.html">Car Wash</a></li>
                                    <li><a href="chef.html">Catering</a></li>
                                    <li><a href="bueatician.html">beautician</a></li>
                                    <li><a href="mechanic.html">Appliance</a></li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="providers.html">Providers </a>

                            </li>
                            <li class="has-submenu">
                                <a href="about-us.html">about us </a>

                            </li>

                            <li><a href="contact-us.html">Contact us</a></li>

                            <!-- <li class="login-link">
                                <a href="clogin.php">Login</a>
                            </li> -->
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <!-- <li class="nav-item">
                            <a class="nav-link header-login" href="clogin.php"><i class="feather-user"></i> 
                                Login</a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </header>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 mx-auto">
                        <div class="login-wrap">
                            <div class="login-header">
                                <h3>Customer Login</h3>
                                <p>Please enter your details</p>
                                <!-- <h6>Sign in with <a href="login-phone.html">Phone Number</a></h6> -->


                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                    <div class="log-form">
                                        <div class="form-group">
                                            <label class="col-form-label">Username</label>
                                            <input type="text" name="username" class="form-control"
                                                placeholder="username" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="col-form-label">Password</label>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="forgot-link" href="cforgot-password.html">
                                                        Forgot password?
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pass-group">
                                                <input type="password" name="password" class="form-control pass-input"
                                                    placeholder="*************" required>
                                                <span class="toggle-password feather-eye-off"></span>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                        <div class="col-6">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme" class="rememberme">
                                                <span class="checkmark"></span>Remember Me
                                            </label>
                                        </div>
                                        <div class="col-6 text-end">
                                            <label class="custom_check">
                                                <input type="checkbox" name="loginotp" class="loginotp">
                                                <span class="checkmark"></span>Login with OTP
                                            </label>
                                        </div>
                                    </div> -->
                                    </div>
                                    <button class="btn btn-primary w-100 login-btn" type="submit">Login</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">OR</span>
                                    </div>
                                    <div class="social-login">
                                        <p class="no-acc">Don't have an account ? <a href="csignup.php">Register</a></p>
                                        <p class="no-acc"><a href="plogin.php">Expert login or Register</a></p>
                                    </div>
                                    <!-- <p class="no-acc">Don't have an account ? <a href="csignup.php">Register</a></p>
                                <p class="no-acc"><a href="plogin.php">Expert login or Register</a></p> -->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mouse-cursor cursor-outer"></div>
            <div class="mouse-cursor cursor-inner"></div>

        </div>

        <script src="assets/js/jquery-3.7.0.min.js" type="09b3ce4fc38cc7d01dae0c4c-text/javascript"></script>

        <script src="assets/js/bootstrap.bundle.min.js" type="09b3ce4fc38cc7d01dae0c4c-text/javascript"></script>

        <script src="assets/js/feather.min.js" type="09b3ce4fc38cc7d01dae0c4c-text/javascript"></script>

        <script src="assets/js/script.js" type="09b3ce4fc38cc7d01dae0c4c-text/javascript"></script>
        <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="09b3ce4fc38cc7d01dae0c4c-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 11:38:34 GMT -->

</html>