<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Date</title>
    <link rel="stylesheet" href="date.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="date.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Select Your Appointment Date & Time</h2>
        <input type="text" id="date-picker" class="full-calendar">
        <button class="continue-button" id="continue-btn" onclick="fadeOutAndRedirect('credentials.html')">Continue</button>
    </div>
</body>
</html>
