<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skn_aesthetic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];

    // Insert into database
    $sql = "INSERT INTO appointments (appointment_date, appointment_time) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $appointment_date, $appointment_time);

    if ($stmt->execute()) {
        header("Location: credentials.html"); // Redirect to the next step
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
