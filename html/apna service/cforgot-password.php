<?php
ob_start();
// Connect to the database (replace with your own database credentials)
$host = 'localhost';
$db = 'apnaservice';
$user = 'root';
$password = '';

$conn = mysqli_connect($host, $user, $password, $db);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password1'];

    // Check the credentials in the database
    $query = "SELECT * FROM clogin WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    // If the student exists, display the profile
    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
        if ($result) {
            $sql = "UPDATE clogin SET password = '$password' WHERE email = '$email'";
            if (mysqli_query($conn, $sql)) {
                header("Location: clogin.php");
            } else {
                echo "<script>alert('Error updating password!');</script>";
            }
        }
    
       ?>
    
        <?php
    } else {
        echo '<p style="color: red">Please check your email, does not exit</p>';
    }
}
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 11:38:34 GMT -->

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
                                <h3>Customer Reset Password</h3>
                                <p>Your new password must be different from previous used passwords.</p>
                            </div>


                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="log-form">
                                    <div class="form-group">
                                        <label class="col-form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="johndoe@example.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">New Password</label>
                                        <div class="pass-group" id="passwordInput">
                                            <input type="password" name="password1" class="form-control pass-input"
                                                placeholder="*************" required>
                                            <span class="toggle-password feather-eye-off"></span>
                                        </div>
                                        <div class="password-strength" id="passwordStrength">
                                            <span id="poor"></span>
                                            <span id="weak"></span>
                                            <span id="strong"></span>
                                            <span id="heavy"></span>
                                        </div>
                                        <div id="passwordInfo">Use 8 or more characters with a mix of letters, numbers &
                                            symbols.</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Confirm Password</label>
                                        <div class="pass-group">
                                            <input type="password" name="password2" class="form-control pass-input"
                                                placeholder="*************" required>
                                            <span class="toggle-password feather-eye-off"></span>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100 login-btn" type="submit">Save Change</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <script src="assets/js/jquery-3.7.0.min.js" type="3df0d3aac04ef992473705b6-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="3df0d3aac04ef992473705b6-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="3df0d3aac04ef992473705b6-text/javascript"></script>

    <script src="assets/js/validation.js" type="3df0d3aac04ef992473705b6-text/javascript"></script>

    <script src="assets/js/script.js" type="3df0d3aac04ef992473705b6-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="3df0d3aac04ef992473705b6-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 11:38:35 GMT -->

</html>