<?php
// Start session
session_start();

// Connect to database
$host = 'localhost';
$dbname = 'final';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

// Retrieve the user's email from the session
$email = $_SESSION['email'];

// Retrieve all requests associated with the user's email
$stmt = $pdo->prepare('SELECT * FROM app WHERE email = ?');
$stmt->execute([$email]);
$requests = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Requests</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Table style -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: right;
        }

        th, td {
            padding: 8px;
        }

        th {
            background-color: #eb5d1e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
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
    <h1>طلباتي</h1>

    <?php if (count($requests) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>حالة الطلب</th>
                    <th>الملاحظات</th>
                    <th> العمر</th>
                    <th>الرقم الوطني</th>
                    <th>الاسم </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requests as $request): ?>
                    <tr>
                    <td style="
                            <?php
                                if ($request['case_status'] === 'Pending') {
                                    echo 'color: silver;';
                                } elseif ($request['case_status'] === 'Rejected') {
                                    echo 'color: red;';
                                } elseif ($request['case_status'] === 'Approved') {
                                    echo 'color: green;';
                                }
                            ?>
                        ">
                            <?= $request['case_status'] ?>
                        </td>
                        <td><?= $request['description'] ?></td>
                        <td><?= $request['age'] ?></td>

                        <td><?= $request['id_number'] ?></td>
                        <td><?= $request['name'] ?></td>

                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No requests found.</p>
    <?php endif; ?>
</body>
</html>

