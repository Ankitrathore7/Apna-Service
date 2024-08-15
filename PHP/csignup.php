<?php

// Connect to the database (replace with your own database credentials)
$host = 'localhost';
$db = 'apnaservice';
$user = 'root';
$password = '';

$conn = mysqli_connect($host, $user, $password, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    if (isset($_FILES["profile_pic"])) {
        $file_name = $_FILES["profile_pic"]["name"];
        $file_tmp = $_FILES["profile_pic"]["tmp_name"];

        $target_dir = "uploads/";
        $target_file = $target_dir. basename($file_name);

        // Check if the target directory exists and is writable
        if (!is_dir($target_dir) ||!is_writable($target_dir)) {
            echo "<script>alert('Target directory does not exist or is not writable.');</script>";
        } else {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($file_tmp, $target_file)) {
                // Insert new user into database
                $insert_query = "INSERT INTO clogin (username, password, email, mobile, profile_pic) VALUES ('$username','$password', '$email', '$mobile', '$target_file')";
                if ($conn->query($insert_query) === TRUE) {
                    header("Location: clogin.php");
                } else {
                    echo "<script>alert('Registration failed. Please check your credentials!');</script>";
                }
            } else {
                echo "<script>alert('Failed to upload profile picture.');</script>";
            }
        }
    } else {
        // Handle the case where the "profile_pic" key doesn't exist
        echo "<script>alert('Please select a profile picture.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 11:38:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Apna Services</title>

    <link rel="shortcut icon" href="assets/img/logos\favicon.png">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/intltelinput/css/intlTelInput.css">
    <link rel="stylesheet" href="assets/plugins/intltelinput/css/demo.css">

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

                            <li class="login-link">
                                <a href="clogin.php">Login</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="clogin.php"><i class="feather-user"></i>
                                Login</a>
                        </li>
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
                                <h3>Customer Signup</h3>

                            </div>

                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="profile_pic">Profile Picture:</label>
                                    <input type="file" id="profile_pic" name="profile_pic" accept="uploads/" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label d-block">Password<span class="brief-bio float-end">Must
                                            be 8 Characters at Least</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input"
                                            placeholder="*************" name="password" required>
                                        <span class="toggle-password feather-eye-off"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="johndoe@example.com" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-form-label">Phone Number</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg group_formcontrol"
                                                id="phone" name="mobile" name="mobile" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-form-label">Service</label>
                                    <input type="text" class="form-control" name="service" placeholder="service" required>
                                </div> -->

                                <button type="submit" class="btn btn-primary w-100 login-btn">Signup</button>
                                <!-- <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">Or, log in with your email</span>
                                </div>
                                <div class="social-login">
                                    <a href="#" class="btn btn-google w-100"><img src="assets/img/icons/google.svg"
                                            class="me-2" alt="img">Log in with Google</a>
                                    <a href="#" class="btn btn-google w-100"><img src="assets/img/icons/fb.svg"
                                            class="me-2" alt="img">Log in with Facebook</a>
                                </div> -->
                                <p class="no-acc">Already have an account ? <a href="clogin.php"> Sign In</a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <script src="assets/js/jquery-3.7.0.min.js" type="ff5dd4700fa8e013f34be927-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="ff5dd4700fa8e013f34be927-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="ff5dd4700fa8e013f34be927-text/javascript"></script>

    <script src="assets/plugins/intltelinput/js/intlTelInput.js"
        type="ff5dd4700fa8e013f34be927-text/javascript"></script>

    <script src="assets/js/script.js" type="ff5dd4700fa8e013f34be927-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="ff5dd4700fa8e013f34be927-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 11:38:33 GMT -->

</html>