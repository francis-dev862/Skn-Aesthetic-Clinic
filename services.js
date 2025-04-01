function toggleService(id) {
    var service = document.getElementById(id);
    if (service.style.display === "none" || service.style.display === "") {
        service.style.display = "block";
    } else {
        service.style.display = "none";
    }
}
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll("input[type='checkbox']");
    const continueBtn = document.getElementById("continue-btn");

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            let checked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            continueBtn.style.display = checked ? "block" : "none";
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const dateInput = document.getElementById("calendar");
    const continueBtn = document.getElementById("continue-btn");

    dateInput.addEventListener("change", function () {
        if (dateInput.value) { 
            continueBtn.style.display = "block"; // Show button when a date is selected
        }
    });
});
// Initialize Flatpickr on the input field
document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#datetime", {
        enableTime: true,      // Enables time selection
        dateFormat: "Y-m-d H:i", // Format: YYYY-MM-DD HH:mm
        minDate: "today",      // Prevents past dates
        time_24hr: true       // Uses 24-hour format
    });
});

// Function to simulate booking submission
function submitBooking() {
    const selectedDate = document.getElementById("datetime").value;
    if (selectedDate) {
        alert("Appointment booked for: " + selectedDate);
    } else {
        alert("Please select a date and time!");
    }
}

