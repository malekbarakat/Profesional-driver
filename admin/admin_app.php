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

// Check if the delete button was pressed
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM app WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Check if the update button was pressed
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $id_number = $_POST['id_number'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $case_status = $_POST['case_status'];
    
    // Update the record in the database
    $sql = "UPDATE app SET name=?, age=?, id_number=?, description=?, email=?, phone=?, case_status=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssssi", $name, $age, $id_number, $description, $email, $phone, $case_status, $id);
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Query the database for all records
$sql = "SELECT * FROM app";
$result = $conn->query($sql);
?>
<html>
<head>
    <title>Records</title>
</head>
<body>
    <h1>Records</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>ID Number</th>
            <th>Description</th>
            <th>Case Status</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Delete</th>
            <th>Update</th>
            <th>View Image</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<form method='post' action=''>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td><input type='text' name='name' value='" . $row["name"] . "'></td>";
                echo "<td><input type='text' name='age' value='" . $row["age"] . "'></td>";
                echo "<td><input type='text' name='id_number' value='" . $row["id_number"] . "'></td>";
                echo "<td><input type='text' name='description' value='" . $row["description"] . "'></td>";
                echo "<td><select name='case_status'>
                <option value='Pending' " . ($row['case_status'] == 'Pending' ? 'selected' : '') . ">Pending</option>
                <option value='Rejected' " . ($row['case_status'] == 'Rejected' ? 'selected' : '') . ">Rejected</option>
                <option value='Approved' " . ($row['case_status'] == 'Approved' ? 'selected' : '') . ">Approved</option>
              </select>
              </td>";                echo "<td><input type='email' name='email' value='" . $row["email"] . "'></td>";
                echo "<td><input type='text' name='phone' value='" . $row["phone"] . "'></td>";
                echo '<td>
                <input type="hidden" name="id" value="' . $row["id"] . '">
                <input type="submit" name="delete" value="Delete">
                </td>';
                echo '<td>
                <input type="hidden" name="id" value="' . $row["id"] . '">
                <input type="submit" name="update" value="Update">
                </td>';
                echo "</form>";
                echo '<td>
                <form method="get" action="image.php">
                <input type="hidden" name="id" value="' . $row["id"] . '">
                <input type="submit" name="view" value="View">
                </form>
                </td>';
                echo "</tr>";
                }
                } else {
                echo "No results found.";
                }
                ?>
                </table>
                </body>
            </html>
        
            <?php
            // Close the database connection
            $conn->close();
            ?>

