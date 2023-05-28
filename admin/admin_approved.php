<?php
<?php    	
session_start(); // Start the session

if(!isset($_SESSION['email'])) {
    header('Location: admin_index.php');
    exit();
}
 ?>
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get all of the requests from the database that have case_state = Approved
$sql = "SELECT * FROM app WHERE case_status='Approved'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Display the requests in a table
  echo "<html><head><style>
          table {
            border-collapse: collapse;
            width: 100%;
          }
          th, td {
            text-align: left;
            padding: 8px;
          }
          tr:nth-child(even) {background-color: #f2f2f2;}
          th {
            background-color: #4CAF50;
            color: white;
          }
        </style></head><body>";
  echo "<h2>Approved Requests</h2>";
  echo "<table><tr><th>ID</th><th>Name</th><th>Age</th><th>ID Number</th><th>Email</th><th>Phone</th><th>Description</th><th>Case State</th></tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['id_number'] . "</td><td>" . $row['email']. "</td><td>" . $row['phone'] . "</td><td>" . $row['description'] . "</td><td><span style=\"color: green\">" . $row['case_status'] . "</span></td></tr>";
}

  echo "</table></body></html>";
} else {
  echo "No approved requests found.";
}

$conn->close();
?>
