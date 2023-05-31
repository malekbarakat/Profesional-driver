<?php    	
session_start(); // Start the session

// if(!isset($_SESSION['email'])) {
//     header('Location: admin_index.php');
//     exit();
// }
 ?>
<?php

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
          h1 {
            color:#2e8b57;
            font-size: 36px;
            text-align: center;
        }
          th, td {
            text-align: right;
            padding: 8px;
          }
          tr:nth-child(even) {background-color: #f2f2f2;}
          th {
            background-color: #4CAF50;
            color: white;
          }
          
        </style></head><body>";

  echo "<h1>الطلبات الموافق عليها </h1>";
  echo "<table><tr><th>حالة الطلب </th><th>الملاحظات</th><th>رقم الهاتف</th><th>البريد الالكتروني </th><th>الرقم الوطني</th><th>العمر</th><th>الاسم </th><th>ID</th></tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td><span style=\"color: green\">" . $row['case_status'] . "</span></td><td>" . $row['description'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td><td>" . $row['id_number'] . "</td><td>" . $row['age']. "</td><td>" . $row['name'] . "</td><td>" . $row['id'] . "</td></tr>";
}

  echo "</table></body></html>";
} else {
  echo "No approved requests found.";
}

$conn->close();
?>

<body>
<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

  <style>
.circle {
            width: 70px;
            height: 70px;
            color: #fff;
            background-color: #007bff;
            border-radius: 50%;
            position: fixed;
            bottom: 30px;
            left: 30px;
          }
          .circle i {
            font-size: 40px;
            position: absolute;
            right: 15px;
            bottom: 15px;
          }
  </style>
<div class='circle'>
        <a href='admin_home.php' style='color: #fff'>
        <i class='bx bx-arrow-back'></i>
        </a>
        </div>
</body>