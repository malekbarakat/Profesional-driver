<?php    	
session_start(); // Start the session

if(!isset($_SESSION['email'])) {
    header('Location: admin_index.php');
    exit();
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			color: #333333;
			margin-top: 50px;
		}
		.btn-container {
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 20px;
		}
		.btn {
			display: block;
			margin: 10px;
			padding: 8px 16px;
			background-color: #4CAF50;
			color: white;
			text-align: center;
			text-decoration: none;
			border-radius: 5px;
			font-size: 14px;
			font-weight: bold;
			cursor: pointer;
		}
		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>اهلا بك في صفحة ادارة النظام</h1>
	<div class="btn-container">
		<a class="btn" href="logout.php">تسجيل الخروج</a>
		<a class="btn" href="admin_users.php">ادارة حسابات المستخدمين</a>
		<a class="btn" href="admin_contact.php">ادارة استفسارات العملاء </a>
		<a class="btn" href="admin_app.php">ادارة طلبات  المستخدين</a>
		<a class="btn" href="admin_approved.php">الطلبات الموافق عليها </a>
	</div>
</body>
</html>
