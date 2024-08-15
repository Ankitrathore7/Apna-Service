<?php

// Handle form submission for booking service
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required fields are set
    if (isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['payment'])) {
        // Database connection
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "apnaservice";

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $name = $conn->real_escape_string($_POST['name']);
        $mobile = $conn->real_escape_string($_POST['mobile']);
        $email = $conn->real_escape_string($_POST['email']);
        $service = $conn->real_escape_string($_POST['service']);
        $date = $conn->real_escape_string($_POST['date']);
        $payment = $conn->real_escape_string($_POST['payment']);

        // Provider details from the previous page form submission
        $provider_name = $conn->real_escape_string($_POST['provider']);
        $provider_mobile = $conn->real_escape_string($_POST['pmobile']);

        // Prepare SQL statement to insert booking details into the database
        $sql = "INSERT INTO bookings (name, mobile, email, date, payment, provider, pmobile, service)
                VALUES ('$name', '$mobile', '$email', '$date', '$payment', '$provider_name', '$provider_mobile','$service')";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Appoinment Successfull, we will contact you son...');</script>";
            echo "<script>window.location.href = 'index-2.php';</script>";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close database connection
        $conn->close();
    } else {
        // Handle case when required fields are not set
        
        echo "<script>alert('Please fill in all the required fields.');</script>";
    }
}
?>
