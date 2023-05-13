<?php
// Start session
session_start();

// Connect to database
$host = 'localhost';
$dbname = 'test3';
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

    <!-- Table style -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Requests</h1>

    <?php if (count($requests) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>ID Number</th>
                    <th>Description</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requests as $request): ?>
                    <tr>
                        <td><?= $request['name'] ?></td>
                        <td><?= $request['age'] ?></td>
                        <td><?= $request['id_number'] ?></td>
                        <td><?= $request['description'] ?></td>
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No requests found.</p>
    <?php endif; ?>
</body>
</html>

