<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetic Beauty Center</title>
    <link rel="stylesheet" href="branch.css">
</head>
<body>
    <div class="container">

        <h2>Select Your Preferred Branch</h2>
        
        <div class="branch-selection">
            <div class="branch-option" onclick="selectBranch(this, 'Quezon City')">West Triangle, Quezon Ave., Quezon City</div>
            <div class="branch-option" onclick="selectBranch(this, 'San Jose Del Monte')">San Jose Del Monte, Bulacan</div>
        </div>

        <button id="continue-btn" class="continue-button" style="display:none;" onclick="fadeOutAndRedirect('services.html')">Continue</button>
    </div>

    <script>
        function selectBranch(element, branch) {
            localStorage.setItem("selectedBranch", branch);

            // Remove "selected" class from all options
            document.querySelectorAll('.branch-option').forEach(el => el.classList.remove('selected'));

            // Add "selected" class to clicked option
            element.classList.add('selected');

            // Show continue button
            document.getElementById("continue-btn").style.display = "block";
        }
        function fadeOutAndRedirect(page) {
            document.body.classList.add("fade-out"); // Apply fade-out effect
            setTimeout(() => {
                window.location.href = page; // Redirect after fade-out
            }, 500); // Match the transition duration in CSS
        }
    </script>
</body>
</html>
