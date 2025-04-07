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
    <form action="services-form.php" method="POST">
        <!-- Beauty Facial Treatments -->
        <div class="service-box" onclick="toggleService('beauty')">Beauty Facial Treatments</div>
        <div id="beauty" class="service-types" style="display:none;">
            <div class="service-item">
                <label><input type="checkbox" name="services[Beauty Facial Treatments][]" value="OIL CONTROL Facial"> OIL CONTROL Facial</label>
                <div class="time-price">Basic • ₱488</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox" name="services[Beauty Facial Treatments][]" value="DEEP Facial"> DEEP Facial</label>
                <div class="time-price">(SIGNATURE) With diamond peel galvanic • ₱788</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox" name="services[Beauty Facial Treatments][]" value="WARTS REMOVAL"> WARTS REMOVAL</label>
                <div class="time-price">*Unlimited flat warts only • ₱1,500</div>
            </div>
        </div>

        <!-- Gluta Drips -->
        <div class="service-box" onclick="toggleService('medical')">Gluta Drips</div>
        <div id="medical" class="service-types" style="display:none;">
            <div class="service-item">
                <label><input type="checkbox" name="services[Gluta Drips][]" value="CELESTIAL DRIP"> CELESTIAL DRIP</label>
                <div class="time-price">₱ 8,988</div>
                <div class="time-price">10 CELESTIAL DRIP | 4 Free treatment Per session • ₱1,000</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox" name="services[Gluta Drips][]" value="SNOW WHITE DRIP"> SNOW WHITE DRIP</label>
                <div class="time-price">₱ 21,000</div>
                <div class="time-price">10 Power dose drip | 30 Free treatment & HIFU Per session • ₱2,500</div>
            </div>
            <div class="service-item">
                <label><input type="checkbox" name="services[Gluta Drips][]" value="POWER DOSE DRIP"> POWER DOSE DRIP</label>
                <div class="time-price">₱ 16,988</div>
                <div class="time-price">10 Snow white drip | 20 Free treatment & HIFU Per session • ₱1,788</div>
            </div>
        </div>

        <!-- Advanced Body Treatment -->
        <div class="service-box" onclick="toggleService('body')">Advanced Body Treatment</div>
        <div id="body" class="service-types" style="display:none;">
            <div class="service-item">
                <label><input type="checkbox" name="services[Advanced Body Treatment][]" value="LED Collagen Boost Capsule"> LED Collagen Boost Capsule</label>
                <div class="time-price">1 hour • $139</div>
            </div>
        </div>

        <!-- New Client - Skin Analysis -->
        <div class="service-box" onclick="toggleService('analysis')">New Client - Skin Analysis</div>
        <div id="analysis" class="service-types" style="display:none;">
            <div class="service-item">
                <label><input type="checkbox" name="services[Skin Analysis][]" value="3D Skin Analysis"> 3D Skin Analysis</label>
                <div class="time-price">45 mins • Free</div>
            </div>
        </div>

        <button id="continue-btn" class="continue-button" style="display:none;" type="submit">Continue</button>
    </form>
</div>

<script>
        function toggleService(id) {
            const section = document.getElementById(id);
            section.style.display = section.style.display === "none" || section.style.display === "" ? "block" : "none";
        }

        document.addEventListener("DOMContentLoaded", function () {
            const checkboxes = document.querySelectorAll("input[type='checkbox']");
            const continueBtn = document.getElementById("continue-btn");

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener("change", function () {
                    const anyChecked = Array.from(checkboxes).some(c => c.checked);
                    continueBtn.style.display = anyChecked ? "block" : "none";
                });
            });

            // Intercept form submission for fade effect
            const form = document.querySelector("form");
            form.addEventListener("submit", function (e) {
                e.preventDefault(); // Stop immediate submission
                document.body.classList.add("fade-out");

                setTimeout(() => {
                    form.submit(); // Now submit the form after fade
                }, 500);
            });
        });
    </script>

</body>
</html>
