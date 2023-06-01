<?php    	
session_start(); // Start the session

if(!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
 ?>
<!DOCTYPE html>
<html>

<head>
<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-color: #fef8f5;
        }

        .container {
            max-width: 400px;
            margin: 30px auto;
            padding: 20px;
            background-color: #eb5d1e;
            border: 1px solid #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            color: #fff;
            position: relative;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        form label {
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="email"],
        form input[type="tel"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #fff;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
        }

        form textarea {
            height: 80px;
        }

        form input[type="file"] {
            margin-top: 6px;
            position: relative;
            right: 130px;
            bottom: 25px;
        }

        form input[type="submit"] {
            background-color: #fff;
            color: #eb5d1e;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 5px;
            border-radius: 10px;
            transition: 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: #FF9933;
            color: #fff;
            transition: 0.3s;
        }

        .message {
            text-align: center;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #fff;
            color: #eb5d1e;
            border-radius: 4px;
            font-weight: bold;
        }
        .textright{
            text-align: right;

        }
        input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        }
        .bg {
            background-color: #D3D3D3;
        }
        .p1, .p2, .p3 {
            margin-top: 5px;
            margin-bottom: 20px;
            padding-top: 8px;
            padding-right: 6px;
            border: 2px solid #fff;
            border-radius: 5px;
            height: 30px;
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
.AGREE {
    position: absolute;
    left: 25px;
    top: 940px;
}
        select {
            cursor: pointer;
        }
       
    </style>
</head>
<body>
<div class="circle">
      <a href="home.php" style="color: #fff">
        <i class="bx bxs-home"></i>
      </a>
    </div>

    <div class="container">
        <h1>حجز موعد الرخصة</h1>
        <form class="textright"method="POST" enctype="multipart/form-data" action="form2.php">
            <label>الاسم</label>
            <input type="text" name="name" required>

            <label>العمر</label>
            <input type="number" name="age" required max="100" min="18">

            <label>الرقم الوطني</label>
            <input type="text" pattern="[0-9]{10}" name="id_number" required>

            <label>البريد</label>
            <input type="email" name="email" required>

            <label>رقم الهاتف </label>
            <input type="tel" pattern="[0-9]{10}" name="phone" required>

            <label>ملاحظات:</label>
            <textarea name="description"></textarea>

            <br>
            <label>نوع الامتحان:</label>
            <br>
            <select class="p1" name="exam_type" required>
            <option value="">اختر نوع الامتحان</option>
            <option value="الامتحان العملي">الامتحان العملي</option>
            <option value="امتحان نظري">امتحان نظري</option>
            </select>
            <br>

            <label>حالة الطلب</label>
            <input class="bg" type="text" name="case_status" value="Pending" disabled>


            <div class="p1">
            <label>الوجه الامامي للهوية</label><br>
            <input type="file" name="image1"><br>
            </div>
            <div class="p2">
            <label >الوجه الخلفي للهوية</label><br>
            <input type="file" name="image2"><br>
            </div>
            <div class="p3">
            <label >  الصورة الشخصية</label><br>
            <input type="file" name="image3"><br>
            </div>
            <label class="AGREE">
            <input type="checkbox"required/>    
            <span class="caption" >أوافق على الشروط والاحكام</span>
                    </label>
            <input type="submit" value="ارسال الطلب">
        </form>


        <?php
        // Connect to the MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "final";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the form input values
            $name = $_POST['name'];
            $age = $_POST['age'];
            $id_number = $_POST['id_number'];
            $description = $_POST['description'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $case_status = 'Pending'; // Default case status
            $exam_type = $_POST['exam_type']; // Get the selected exam type


            // Check if the file was uploaded successfully
            if (isset($_FILES['image1']) && $_FILES['image1']['error'] == UPLOAD_ERR_OK &&
                isset($_FILES['image2']) && $_FILES['image2']['error'] == UPLOAD_ERR_OK &&
                isset($_FILES['image3']) && $_FILES['image3']['error'] == UPLOAD_ERR_OK) {

                // Get the file names and types
                $file1_name = $_FILES['image1']['name'];
                $file2_name = $_FILES['image2']['name'];
                $file3_name = $_FILES['image3']['name'];
                $file1_type = $_FILES['image1']['type'];
                $file2_type = $_FILES['image2']['type'];
                $file3_type = $_FILES['image3']['type'];

                // Check if the file types are images
                if (($file1_type == 'image/jpeg' || $file1_type == 'image/png' || $file1_type == 'image/jpg') &&
                    ($file2_type == 'image/jpeg' || $file2_type == 'image/png' || $file2_type == 'image/jpg') &&
                    ($file3_type == 'image/jpeg' || $file3_type == 'image/png' || $file3_type == 'image/jpg')) {

                    // Get the temporary file locations
                    $file1_tmp = $_FILES['image1']['tmp_name'];
                    $file2_tmp = $_FILES['image2']['tmp_name'];
                    $file3_tmp = $_FILES['image3']['tmp_name'];

                    // Read the file contents
                    $file1_contents = file_get_contents($file1_tmp);
                    $file2_contents = file_get_contents($file2_tmp);
                    $file3_contents = file_get_contents($file3_tmp);

                    // Escape the file contents for use in an SQL query
                    $escaped_file1 = $conn->real_escape_string($file1_contents);
                    $escaped_file2 = $conn->real_escape_string($file2_contents);
                    $escaped_file3 = $conn->real_escape_string($file3_contents);

                    // Insert the file contents into the database
                    $sql = "INSERT INTO app (name, age, id_number, description, case_status, exam_type, image1, image2, image3, email, phone)
                            VALUES ('$name', '$age', '$id_number', '$description', '$case_status', '$exam_type', '$escaped_file1', '$escaped_file2', '$escaped_file3', '$email', '$phone')";
                    if ($conn->query($sql) === TRUE) {
                        // Request submitted successfully
                        echo "<script>
                        alert('تم تقديم طلبك بنجاح');
                        window.location.href = 'home.php';
                        </script>";
                    } else {
                        // Error inserting request into database
                        $message = "هنالك خطأ في البيانات";
                    }
                } else {
                    // File types are not images
                    $message = "Only JPEG images are allowed.";
                }
            } else {
                // Not all files were uploaded
                // Show error message to the user
                $message = "قم بتحميل جميع الصور";
            }
            // Display message to the user
            echo "<p class='message'>$message</p>";
        }
        ?>

    </div>
</body>
</html>
