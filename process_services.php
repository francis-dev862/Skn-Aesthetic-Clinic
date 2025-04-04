<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skn_aesthetic";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["services"]) && !empty($_POST["services"])) {
        $selected_services = $_POST["services"];

        echo "<h2>Selected Services</h2>";
        echo "<ul>";

        foreach ($selected_services as $service) {
            preg_match('/₱?[\d,]+(?:\.\d{2})?/', $service, $matches);
            $price = isset($matches[0]) ? $matches[0] : "N/A";

            $stmt = $conn->prepare("INSERT INTO service_selections (service_name, price) VALUES (?, ?)");
            $stmt->bind_param("ss", $service, $price);
            $stmt->execute();

            echo "<li>" . htmlspecialchars($service) . " (Stored in DB)</li>";
        }
        echo "</ul>";

        echo "<a href='index.php'>Go Back</a>";

        $stmt->close();
    } else {
        echo "<h2>No services selected.</h2>";
        echo "<a href='index.php'>Go Back</a>";
    }
} else {
    echo "<h2>Invalid Request</h2>";
}

$conn->close();
?>
