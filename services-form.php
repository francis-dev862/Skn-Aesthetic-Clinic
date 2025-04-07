<?php
// Database credentials
$host = "localhost";        // or 127.0.0.1
$username = "root";         // your DB username
$password = "";             // your DB password
$dbname = "skn_booking";    // your DB name

// Create a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if services are submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['services'])) {
    $services = $_POST['services'];

    foreach ($services as $category => $types) {
        foreach ($types as $service) {
            $stmt = $conn->prepare("INSERT INTO selected_services (category, service_name) VALUES (?, ?)");
            $stmt->bind_param("ss", $category, $service);
            $stmt->execute();
            $stmt->close();
        }
    }

    //Redirect to date.html after saving
    header("Location: date.html");
    exit();
} else {
    echo "No services were selected.";
}

$conn->close();
?>
