
<?php
session_start(); // Start the session

// if (!isset($_SESSION['email'])) {
//     header('Location: admin_index.php');
//     exit();
// }
?>
<!DOCTYPE html>
<html>
<head>
<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>User Management</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      margin: 0;
      padding: 0;
    }
    h1 {
      margin: 0;
      padding: 20px;
      background-color: #2196F3;
      color: #fff;
      text-align: center;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }
    th, td {
      text-align: right;
      padding: 8px;
    }
    th {
      background-color: #2196F3;
      color: #fff;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      text-align: right;

    }
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }
    input[type=submit]:hover {
      background-color: #45a049;
    }
    .container {
      padding: 20px;
    }
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
</head>
<body>
<?php
// Establish database connection
include("../signup_action.php");

// Handle delete request
if (isset($_POST["delete"])) {
    $id = $_POST["id"];
    try {
        $stmt = $con->prepare("DELETE FROM useres WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        header("Location: admin_users.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Handle update request
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    try {
        $stmt = $con->prepare("UPDATE useres SET email=:email, firstname=:firstName, lastname=:lastName WHERE id=:id");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":firstName", $firstName);
        $stmt->bindParam(":lastName", $lastName);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        echo "<script>
          alert('Record updated successfully');
          window.location.href = 'admin_home.php';
      </script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Select all records from database
try {
    $stmt = $con->prepare("SELECT * FROM useres");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<div class="circle">
      <a href="admin_home.php" style="color: #fff">
      <i class='bx bx-arrow-back'></i>
      </a>
    </div>
<h1>حسابات المستخدمين </h1>

<div class="container">
    <!-- Display records in a table -->
    <table>
        <thead>
        <tr>
          <th>البريدالالكتروني</th>
          <th>الاسم الاخير</th>
          <th>الاسم الاول </th>
          <th>ID</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Check if users array is not empty before looping through it
        if (!empty($users)) {
            foreach ($users as $user) {
                ?>
                <tr>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                      
                    <td><input type="text" name="email" value="<?php echo $user["email"]; ?>" readonly></td>
                    <td><input type="text" name="lastName" value="<?php echo $user["lastname"]; ?>" readonly></td>
                    <td><input type="text" name="firstName" value="<?php echo $user["firstname"]; ?>"readonly></td>
                      <td><?php echo $user["id"]; ?></td>
                        <!-- <td>
                            <input type="hidden" name="id" value="<?php //echo $user["id"]; ?>">
                            <input type="submit" name="update" value="Update" class="btn-update" readonly>
                            <input type="submit" name="delete" value="Delete"
                                   onclick="return confirm('Are you sure you want to delete this record?')"
                                   class="btn-delete" readonly>
                        </td> -->
                    </form>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='5'>لا يوجد سجلات </td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

