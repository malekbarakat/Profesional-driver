<?php
// Establish a secure database connection using PDO (PHP Data Objects)
try {
    $dsn = "mysql:host=localhost;dbname=final;charset=utf8mb4";
    $username = "root";
    $password = "";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Failed to connect to the database: " . $e->getMessage());
}
session_start();

// Check if the login form has been submitted
if(isset($_POST['submit'])) {
    // Sanitize and validate user input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $code = filter_var($_POST['code'], FILTER_SANITIZE_STRING);
    
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format
        $error = "Invalid email format.";
    } elseif(empty($password) || empty($code)) {
        // Password or code is empty
        $error = "Please enter a password and a code.";
    } else {
        // Compare the user input with the database using prepared statements
        $query = "SELECT * FROM admins WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute(["email" => $email]);
        $admin = $stmt->fetch();
        
        if($admin && password_verify($password, $admin['password']) && $admin['code'] === $code) {
            // User input is valid, redirect the user to the admin.php page
            session_start();
				$_SESSION['email'] = $email;
			header("Location: admin_home.php");
            exit();
        } else {
            // User input is invalid, display an error message
            $error = "Invalid email, password, or code.";
        }
    }
}

// Close the database connection
$pdo = null;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.container {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
			width: 400px;
			max-width: 100%;
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}

		.error {
			color: red;
			margin-bottom: 10px;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="email"],
		input[type="password"],
		input[type="text"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			margin-bottom: 20px;
		}

		input[type="submit"] {
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		.sign-up-link {
			text-align: center;
			margin-top: 20px;
		}

		.sign-up-link a {
			color: #4CAF50;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Admin Login</h1>
		<?php if(isset($error)) { ?>
			<div class="error"><?php echo $error; ?></div>
		<?php } ?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<label for="code">Code:</label>
			<input type="text" id="code" name="code" required>

			<input type="submit" name="submit" value="Login">
		</form>
		<div class="sign-up-link">
			<a href="../login.php">Back to Login</a>
		</div>
	</div>
</body>
</html>

