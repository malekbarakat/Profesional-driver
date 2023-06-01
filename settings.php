<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

// Include database connection
include("signup_action.php");
include("login_action.php");

// Handle update request
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    try {
        $stmt = $con->prepare("UPDATE useres SET firstname=:firstName, lastname=:lastName WHERE id=:id");
        $stmt->bindParam(":firstName", $firstName);
        $stmt->bindParam(":lastName", $lastName);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
       echo "<script>
        alert('تم تعديل الاسم بنجاح');
        window.location.href = 'home.php';
    </script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Select records for the logged-in user
try {
    $userId = $_SESSION["id"];
    $stmt = $con->prepare("SELECT * FROM useres WHERE id=:id");
    $stmt->bindParam(":id", $userId);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>الاعدادات الشخصية</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
            background-color: #fef8f5;
        }

        h1 {
            margin: 0;
            padding: 20px;
            background-color: #fef8f5;
            color: #eb5d1e;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            text-align: right;
            padding: 8px;
            border: 4px solid white;
            border-radius: 10px;
        }

        th {
            background-color: #eb5d1e;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        input[type="text"]:read-only {
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
            background-color: #eb5d1e;
            font-size: 13px;
            font-weight: bold;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            transition: 0.3s;
        }

        input[type=submit]:hover {
            background-color: #ef7f4d;
            transition: 0.3s;
        }

        .container {
            padding: 20px;
        }
        .circle {
            width: 70px;
            height: 70px;
            color: #fff;
            background-color: #eb5d1e;
            border-radius: 50%;
            position: fixed;
            bottom: 30px;
            right: 30px;
        }
.circle i {
  font-size: 40px;
  position: absolute;
  right: 15px;
  bottom: 17px;
}

    </style>
</head>
<body>
<div class="circle">
      <a href="home.php" style="color: #fff">
        <i class="bx bxs-home"></i>
      </a>
    </div>
    <h1>الاعدادات الشخصية</h1>

    <div class="container">
        <!-- Display records in a table -->
        <table>
            <thead>
                <tr>
                    <th>تحديث البيانات</th>
                    <th>البريد الالكتروني</th>
                    <th> الاسم الاخير</th>
                    <th> الاسم الاول</th>
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
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
                                    <input type="submit" name="update" value="تحديث" class="btn-update">
                                </td>
                                <td><input type="text" name="email" value="<?php echo $user["email"]; ?>" readonly></td>
                                <td><input type="text" name="lastName" value="<?php echo $user["lastname"]; ?>"></td>
                                <td><input type="text" name="firstName" value="<?php echo $user["firstname"]; ?>"></td>
                                
                            </form>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>لا يوجد سجلات .</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
