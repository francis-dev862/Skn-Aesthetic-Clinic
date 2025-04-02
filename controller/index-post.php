<?php
include('../configuration/connection-config.php');

session_start();

$fetch = array('success' => false);

if ($_POST['type'] == 'SUBMIT_APPOINTMENT') { 
    
    // Retrieve data from POST (adapt to your form's field names)
    $branch = $dbPortal->real_escape_string($_POST['branch']);
    $service = $dbPortal->real_escape_string($_POST['service']);
    $appointment_date = $dbPortal->real_escape_string($_POST['appointment_date']);
    $appointment_time = $dbPortal->real_escape_string($_POST['appointment_time']);
    $first_name = $dbPortal->real_escape_string($_POST['first_name']);
    $last_name = $dbPortal->real_escape_string($_POST['last_name']);
    $email = $dbPortal->real_escape_string($_POST['email']);
    $mobile_phone = $dbPortal->real_escape_string($_POST['mobile_phone']);
    $mode_of_payment = $dbPortal->real_escape_string($_POST['mode_of_payment']);
    $additional_comments = $dbPortal->real_escape_string($_POST['additional_comments']);

    try {
        // Prepare the SQL statement
        $stmt = $dbPortal->prepare("INSERT INTO appointments (branch, service, appointment_date, appointment_time, first_name, last_name, email, mobile_phone, mode_of_payment, additional_comments) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters
        $stmt->bind_param("ssssssssss", $branch, $service, $appointment_date, $appointment_time, $first_name, $last_name, $email, $mobile_phone, $mode_of_payment, $additional_comments);

        // Execute the statement
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Appointment submitted successfully";

            // If you need the last inserted ID:
            $response['data'] = array(
                'appointment_id' => $dbPortal->insert_id,
                'branch' => $branch,
                'service' => $service,
                'appointment_date' => $appointment_date,
                'appointment_time' => $appointment_time,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'mobile_phone' => $mobile_phone,
                'mode_of_payment' => $mode_of_payment,
                'additional_comments' => $additional_comments
            );

        } else {
            throw new Exception("Error inserting record: " . $stmt->error);
        }

        // Close the statement
        $stmt->close();

    } catch (Exception $e) {
        $response['error'] = $e->getMessage();
    } finally {
        // Close the database connection
        $dbPortal->close();
    }
}
echo json_encode($fetch);
