<?php
$host = "localhost";
$user = "root"; // default XAMPP username
$pass = "";
$db = "skn_booking";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from POST
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$payment = $_POST['payment_mode'];
$comments = $_POST['comments'] ?? '';
$remember = isset($_POST['remember_me']) ? 1 : 0;
$agreedPolicy = isset($_POST['agree_policy']) ? 1 : 0;
$agreedCancel = isset($_POST['agree_cancel']) ? 1 : 0;

// Insert into database
$stmt = $conn->prepare("INSERT INTO client_credentials 
    (first_name, last_name, email, phone, payment_mode, comments, remember_me, agree_policy, agree_cancel) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssiis", $firstName, $lastName, $email, $phone, $payment, $comments, $remember, $agreedPolicy, $agreedCancel);

if ($stmt->execute()) {
    echo "<script>
        alert('Credentials submitted successfully!');
        window.location.href = 'confirm.html';
    </script>";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>
