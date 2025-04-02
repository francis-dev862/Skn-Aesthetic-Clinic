document.addEventListener("DOMContentLoaded", function () {
    // Initialize Flatpickr with inline full-size calendar
    flatpickr("#date-picker", {
        enableTime: true,
        dateFormat: "F j, Y h:i K",
        minDate: "today",
        time_24hr: false,
        defaultHour: 10,
        inline: true // Makes the calendar always visible
    });

    // Continue Button Redirect
    document.getElementById("continue-btn").addEventListener("click", function () {
        fadeOutAndRedirect("credentials.php"); // Redirect without storing anything
    });
});

// Fade-out effect before redirecting
function fadeOutAndRedirect(page) {
    document.body.classList.add("fade-out");
    setTimeout(() => {
        window.location.href = page;
    }, 500); // Match transition duration in CSS
}
