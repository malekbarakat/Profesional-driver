<?php    	
session_start(); // Start the session

if(!isset($_SESSION['email'])) {
    header('Location: admin_index.php');
    exit();
}
 ?>
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

// Check if the delete button was pressed
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM app WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Check if the update button was pressed
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $description = $_POST['description'];
    $case_status = $_POST['case_status'];

    // Retrieve the existing email and phone values from the database
    $sql = "SELECT email, phone FROM app WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($existingEmail, $existingPhone);
    $stmt->fetch();
    $stmt->close();

    // Use the existing email and phone values instead of the user inputs
    $email = $existingEmail;
    $phone = $existingPhone;

    // Update the record in the database
    $sql = "UPDATE app SET description=?, case_status=?, email=?, phone=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $description, $case_status, $email, $phone, $id);
    if ($stmt->execute()) {
        echo "<script>
        alert('Record updated successfully');
        window.location.href = 'admin_home.php';
        </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Query the database for all records
$sql = "SELECT * FROM app";
$result = $conn->query($sql);
?>
<html>
<head>
    <title>Records</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        color: #007bff;
        font-size: 36px;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: right;
        padding: 8px;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    input[type='text'],
    select,
    textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #f2f2f2; /* Set background color for unchangeable fields */
        text-align: right;

    }

    input[type='submit'] {
        background-color: #007bff;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type='submit']:hover {
        background-color: #0069d9;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        color: #0056b3;
    }
    .AGE {
        width: 60px;
    }
    .PHONE, .IDN {
        width: 120px;
    }
    .CT {
        font-size: 13px;
    }
    .DES {
        width: 250px;
        height: 90px;
    }
</style>
</head>
<body>
    <h1>طلبات المستخدمين </h1>
    <table>
        <tr>
            <th>ملفات</th>
            <th>تعديل </th>
            <th>حذف</th>
            <th> التاريخ</th>
            <th>رقم الهاتف</th>
            <th>البريد الالكتروني </th>
            <th> نوع الامتحان </th>
            <th> حالة الطلب</th>
            <th>الملاحظات</th>
            <th>الرقم الوطني</th>
            <th>العمر</th>
            <th>الاسم </th>
            <th>ID</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<form method='post' action=''>";
                echo '<td>
                <form method="get" action="image.php">
                    <input type="hidden" name="id" value="' . $row["id"] . '">
                    <input type="submit" name="view" value="View">
                </form>
            </td>';
        echo '<td>
        <input type="hidden" name="id" value="' . $row["id"] . '">
        <input type="submit" name="update" value="Update">
    </td>';
    echo '<td>
    <input type="hidden" name="id" value="' . $row["id"] . '">
    <input type="submit" name="delete" value="Delete">
    </td>';
    echo "<td class='CT'>" . $row["creation_time"] . "</td>";
    echo "<td class='PHONE'><input type='text' name='phone' value='" . $row["phone"] . "' readonly></td>";
    echo "<td><input type='text' name='email' value='" . $row["email"] . "' readonly></td>";
    echo "<td>
    <select name='exam_type'>
        <option value='الامتحان العملي' " . ($row['exam_type'] == 'الامتحان العملي' ? 'selected' : '') . ">الامتحان العملي</option>
        <option value='الامتحان النظري' " . ($row['exam_type'] == 'الامتحان النظري' ? 'selected' : '') . ">الامتحان النظري</option>
    </select>
</td>";
echo "<td>
    <select name='case_status'>
        <option value='Pending' " . ($row['case_status'] == 'Pending' ? 'selected' : '') . ">Pending</option>
        <option value='Rejected' " . ($row['case_status'] == 'Rejected' ? 'selected' : '') . ">Rejected</option>
        <option value='Approved' " . ($row['case_status'] == 'Approved' ? 'selected' : '') . ">Approved</option>
    </select>
</td>";

echo "<td class='DES'><input type='text' name='description' value='" . $row["description"] . "'></td>";
echo "<td class='IDN'><input type='text' name='id_number' value='" . $row["id_number"] . "' readonly></td>";
echo "<td class='AGE'><input type='text' name='age' value='" . $row["age"] . "' readonly></td>";
    echo "<td><input type='text' name='name' value='" . $row["name"] . "' readonly></td>";
                echo "<td>" . $row["id"] . "</td>";
           

             
                echo '</form>';

                echo "</tr>";
            }
        } else {
            echo "لا يوجد سجلات ";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
