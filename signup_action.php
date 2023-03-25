<?php
include("connect_db.php");

// Define variables and set to empty values
$email = $password = $firstName = $lastName =  "";
$emailErr = $passwordErr = $firstNameErr = $lastNameErr = "";

// Function to test input and prevent malicious code injection
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Function to check if email address is valid
function is_valid_email($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to check if password meets security requirements
function is_valid_password($password) {
  // Password must be at least 8 characters long and contain at least one letter and one number
  return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password);
}



// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate email address
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!is_valid_email($email)) {
      $emailErr = "Invalid email format";
    }
  }

   // Check if email already exists in the database
   $stmt = $con->prepare("SELECT * FROM useres WHERE email = :email");
   $stmt->bindParam(":email", $email);
   $stmt->execute();
   if ($stmt->rowCount() > 0) {
     $emailErr = "This email is already registered";
   }

  // Validate password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    if (!is_valid_password($password)) {
      $passwordErr = "Password must be at least 8 characters long and contain at least one letter and one number";
    }
  }

  // Validate first name
  if (empty($_POST["firstName"])) {
    $firstNameErr = "First name is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
    // First name can only contain letters and spaces
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firstNameErr = "Only letters and spaces allowed";
    }
  }

  // Validate last name
  if (empty($_POST["lastName"])) {
    $lastNameErr = "Last name is required";
  } else {
    $lastName = test_input($_POST["lastName"]);
    // Last name can only contain letters and spaces
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lastNameErr = "Only letters and spaces allowed";
    }
  }



// If there are no errors, insert data into database
if ($emailErr == "" && $passwordErr == "" && $firstNameErr == "" && $lastNameErr == "" ) {
    $stmt = $con->prepare("INSERT INTO useres (email, password, firstname, lastname ) VALUES (:email, :password, :firstname, :lastname)");
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", password_hash($password, PASSWORD_DEFAULT)); // Hash password before storing in database
    $stmt->bindParam(":firstname", $firstName);
    $stmt->bindParam(":lastname", $lastName);
    $stmt->execute();

    header("Location: home.php");
exit();
}
}

?>
