<!DOCTYPE html>
<html>
<head>
    <title>Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 165, 0, 0.9); /* Updated darker background color */
            border: 1px solid #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        form label {
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="email"],
        form input[type="tel"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #fff;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form textarea {
            height: 80px;
        }

        form input[type="file"] {
            margin-top: 5px;
        }

        form input[type="submit"] {
            background-color: #fff;
            color: #FFA500;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .message {
            text-align: center;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #fff;
            color: #FFA500;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Driver's License Request</h1>
        <form method="POST" enctype="multipart/form-data" action="form2.php">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Age:</label>
            <input type="number" name="age" required max="100">

            <label>ID Number:</label>
            <input type="number" name="id_number" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone:</label>
            <input type="tel" name="phone" required>

            <label>Description:</label>
            <textarea name="description"></textarea>

            <label>Case Status:</label>
            <input type="text" name="case_status" value="Pending" disabled>

            <label>Upload Driver's License Front:</label>
            <input type="file" name="image1">

            <label>Upload Driver's License Back:</label>
            <input type="file" name="image2">

            <label>Upload Proof of Address:</label>
            <input type="file" name="image3">

            <input type="submit" value="Submit Request">
        </form>

        <?php
        // Connect to the MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "final";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the form input values
            $name = $_POST['name'];
            $age = $_POST['age'];
            $id_number = $_POST['id_number'];
            $description = $_POST['description'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $case_status = 'Pending'; // Default case status

            // Check if the file was uploaded successfully
            if (isset($_FILES['image1']) && $_FILES['image1']['error'] == UPLOAD_ERR_OK &&
                isset($_FILES['image2']) && $_FILES['image2']['error'] == UPLOAD_ERR_OK &&
                isset($_FILES['image3']) && $_FILES['image3']['error'] == UPLOAD_ERR_OK) {

                // Get the file names and types
                $file1_name = $_FILES['image1']['name'];
                $file2_name = $_FILES['image2']['name'];
                $file3_name = $_FILES['image3']['name'];
                $file1_type = $_FILES['image1']['type'];
                $file2_type = $_FILES['image2']['type'];
                $file3_type = $_FILES['image3']['type'];

                // Check if the file types are images
                if (($file1_type == 'image/jpeg' || $file1_type == 'image/png' || $file1_type == 'image/jpg') &&
                    ($file2_type == 'image/jpeg' || $file2_type == 'image/png' || $file2_type == 'image/jpg') &&
                    ($file3_type == 'image/jpeg' || $file3_type == 'image/png' || $file3_type == 'image/jpg')) {

                    // Get the temporary file locations
                    $file1_tmp = $_FILES['image1']['tmp_name'];
                    $file2_tmp = $_FILES['image2']['tmp_name'];
                    $file3_tmp = $_FILES['image3']['tmp_name'];

                    // Read the file contents
                    $file1_contents = file_get_contents($file1_tmp);
                    $file2_contents = file_get_contents($file2_tmp);
                    $file3_contents = file_get_contents($file3_tmp);

                    // Escape the file contents for use in an SQL query
                    $escaped_file1 = $conn->real_escape_string($file1_contents);
                    $escaped_file2 = $conn->real_escape_string($file2_contents);
                    $escaped_file3 = $conn->real_escape_string($file3_contents);

                    // Insert the file contents into the database
                    $sql = "INSERT INTO app (name, age, id_number, description, case_status, image1, image2, image3, email, phone)
                            VALUES ('$name', '$age', '$id_number', '$description', '$case_status', '$escaped_file1', '$escaped_file2', '$escaped_file3', '$email', '$phone')";
                    if ($conn->query($sql) === TRUE) {
                        // Request submitted successfully
                        $message = "Your application was submitted successfully!";
                    } else {
                        // Error inserting request into database
                        $message = "There was an error submitting your application.";
                    }
                } else {
                    // File types are not images
                    $message = "Only JPEG images are allowed.";
                }
            } else {
                // Not all files were uploaded
                // Show error message to the user
                $message = "Please upload all three image files.";
            }
            // Display message to the user
            echo "<p class='message'>$message</p>";
        }
        ?>

    </div>
</body>
</html>
