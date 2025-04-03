<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKN Aesthetic Center</title>
    <link rel="stylesheet" href="service.css">
</head>
<body>

    <div class="container">
        <h2>Select Your Service</h2>

        <!-- Service Types -->
        <div class="service-box" onclick="toggleService('beauty')">Beauty Facial Treatments</div>
        <div id="beauty" class="service-types">
            <div class="service-item">
                <label><input type="checkbox"> OIL CONTROL Facial</label>
                <div class="time-price">Basic • ₱488</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox"> DEEP Facial</label>
                <div class="time-price">(SIGNATURE) With diamond peel galvanic • ₱788</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox"> WARTS REMOVAL</label>
                <div class="time-price">*Unlimited flat warts only • ₱1,500</div>
            </div>
        </div>

        <div class="service-box" onclick="toggleService('medical')">Gluta Drips</div>
        <div id="medical" class="service-types">
            <div class="service-item">
                <label><input type="checkbox"> CELESTIAL DRIP</label>
                <div class="time-price">₱ 8,988</div>
                <div class="time-price">10 CELESTIAL DRIP | 4 Free treatment Per session • ₱1,000</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox"> SNOW WHITE DRIP</label>
                <div class="time-price">₱ 21,000</div>
                <div class="time-price">10 Power dose drip | 30 Free treatment & HIFU  Per session • ₱2,500</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox"> POWER DOSE DRIP</label>
                <div class="time-price">₱ 16,988</div>
                <div class="time-price">10 Snow white drip | 20 Free treatment & HIFU  Per session • ₱1,788</div>
            </div>
        </div>

        <div class="service-box" onclick="toggleService('body')">Advanced Body Treatment</div>
        <div id="body" class="service-types">
            <div class="service-item">
                <label><input type="checkbox"> LED Collagen Boost Capsule</label>
                <div class="time-price">1 hour • $139</div>
            </div>
        </div>

        <div class="service-box" onclick="toggleService('analysis')">New Client - Skin Analysis</div>
        <div id="analysis" class="service-types">
            <div class="service-item">
                <label><input type="checkbox"> 3D Skin Analysis</label>
                <div class="time-price">45 mins • Free</div>
            </div>
        </div>

        <button id="continue-btn" class="continue-button" style="display:none;" onclick="fadeOutAndRedirect('date.html')">Continue</button>

    </div>

    <script>
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
        function fadeOutAndRedirect(page) {
            document.body.classList.add("fade-out"); // Apply fade-out effect
            setTimeout(() => {
                window.location.href = page; // Redirect after fade-out
            }, 500); // Match the transition duration in CSS
        }
    </script>

</body>
</html>
