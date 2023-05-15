<?php
// Connect to database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'final';
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Get data from database
$sql = 'SELECT * FROM messages ORDER BY id DESC';
$result = mysqli_query($conn, $sql);

// Check if data exists
if (mysqli_num_rows($result) > 0) {
    // Table header
    echo '<table>';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Date</th></tr>';

    // Table data
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['subject'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '<td>' . $row['created_at'] . '</td>';
        echo '</tr>';
    }

    // Table footer
    echo '</table>';
} else {
    echo 'No messages found';
}

// Close database connection
mysqli_close($conn);
?>

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




