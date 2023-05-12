<?php
// Initialize variables
$name = '';
$email = '';
$subject = '';
$message = '';
$errors = array();

// If form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate form fields
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    if (empty($email)) {
        $errors[] = 'Email is required';
    }
    if (empty($subject)) {
        $errors[] = 'Subject is required';
    }
    if (empty($message)) {
        $errors[] = 'Message is required';
    }

    // If no errors, connect to database and insert data
    if (empty($errors)) {
        // Connect to database
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'final';
        $conn = mysqli_connect($host, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        // Escape form values to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $subject = mysqli_real_escape_string($conn, $subject);
        $message = mysqli_real_escape_string($conn, $message);

        // Insert data into database
        $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        if (mysqli_query($conn, $sql)) {
            // Redirect to the same page
            header('Location: home.php');
            exit;
        } else {
            echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        }

        // Close database connection
        mysqli_close($conn);
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
//        Display errors as JavaScript alerts
        if (!empty($errors)) {
            echo '<script>';
            echo 'var errorDiv = document.getElementById("error-message");';
            foreach ($errors as $error) {
                echo 'errorDiv.innerHTML += "'.$error.'<br>";';
            }
            echo '</script>';
        }
    }
}
?>

