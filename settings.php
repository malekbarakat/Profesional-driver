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
    <title>Edit your information</title>
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

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #2196F3;
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
    </style>
</head>
<body>
    <h1>الاعدادات</h1>

    <div class="container">
        <!-- Display records in a table -->
        <table>
            <thead>
                <tr>
                    <th>البريد الالكتروني</th>
                    <th> الاسم الاول</th>
                    <th> الاسم الاخير</th>
                    <th>تحديث</th>
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
                                <td><input type="text" name="firstName" value="<?php echo $user["firstname"]; ?>"></td>
                                <td><input type="text" name="lastName" value="<?php echo $user["lastname"]; ?>"></td>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
                                    <input type="submit" name="update" value="تحديث" class="btn-update">
                                </td>
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
