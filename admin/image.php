<!DOCTYPE html>
<html>
<head>
    <title>Images</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .image-container img {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 5px;
            height: 400px;
            width: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
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

    // Get the id of the record to display images for
    $id = $_GET['id'];

    // Query the database for the record with the given id
    $sql = "SELECT * FROM app WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        echo "<h1>Record not found</h1>";
    } else {
        // Display the images for the record
        $row = $result->fetch_assoc();
        echo "<h1>Images for Record " . $row["id"] . "</h1>";
        echo '<div class="image-container">';
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image1']).'">';
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image2']).'">';
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image3']).'">';
        echo '</div>';
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
