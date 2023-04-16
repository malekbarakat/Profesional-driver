<?php
	// Initialize database connection
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
		$logerr="";
	// Check if form submitted
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Retrieve form data
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Check if user exists
		$stmt = $pdo->prepare('SELECT * FROM useres WHERE email = ?');
		$stmt->execute([$email]);
		$user = $stmt->fetch();

		if (!$user) {
			$logerr ="Invalid email or password";
		} else {
			// Check if password is correct
			if (password_verify($password, $user['password'])) {
				echo '<p>Log in successful!</p>';
				// Set session variable for logged in user
				session_start();
				$_SESSION['email'] = $email;
				header('Location: index.html');
				exit();
			} else {
				$logerr ="Invalid email or password";
			}
		}
	}
?>