
$(document).ready(function() {
    $('#credentials-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            url: "controller/index-post.php", 
            type: 'POST',
            data: $(this).serialize(), // Serialize the form data
            dataType: 'json', // Expect JSON response from PHP
            success: function(response) {
                if (response.success) {
                    // Appointment submitted successfully
                    alert(response.message); // Display success message
                    // Redirect or perform other actions
                    window.location.href = 'confirm.php'; // Example redirect
                } else {
                    // Error during submission
                    alert('Error: ' + response.message || response.error || 'An unexpected error occurred.');
                    // Display error message
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // AJAX error
                console.error('AJAX Error:', textStatus, errorThrown);
                alert('An error occurred during the request.');
            }
        });
    });
});