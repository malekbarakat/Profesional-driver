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
        // Print success message
        echo "<script>
        alert('Record updated successfully');
        window.location.href = 'admin_home.php';
    </script>";
    } else {
        // Print error message
        echo "Error updating record: " . $conn->error;
    }
    
}

// Query the database for all records
$sql = "SELECT * FROM app";
$result = $conn->query($sql);
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Records</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        body {
  font-family: Arial, sans-serif;
}
h1 {
  color: #007bff;
  font-size: 36px;
  text-align: center;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
th {
  background-color: #007bff;
  color: white;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
tr:hover {
  background-color: #ddd;
}
input[type='text'], input[type='email'], select, textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type='submit'] {
  background-color: #007bff;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type='submit']:hover {
  background-color: #0069d9;
}
a {
  color: #007bff;
  text-decoration: none;
}
a:hover {
  color: #0056b3;
}

     </style>
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
        echo "<td><select name='case_status'>";
        echo "<option value='Pending' " . ($row['case_status'] == 'Pending' ? 'selected' : '') . ">Pending</option>";
        echo "<option value='Rejected' " . ($row['case_status'] == 'Rejected' ? 'selected' : '') . ">Rejected</option>";
        echo "<option value='Approved' " . ($row['case_status'] == 'Approved' ? 'selected' : '') . ">Approved</option>";
        echo "</select></td>";
        echo "<td><input type='email' name='email' value='" . $row["email"] . "'></td>";
        echo "<td><input type='tel' name='phone' value='" . $row["phone"] . "'></td>";
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

