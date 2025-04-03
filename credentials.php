<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKN Aesthetic Center</title>
    <link rel="stylesheet" href="credentials.css">
</head>
<body>
    <div class="container">
        <h2>Enter Your Details</h2>
        <form>
            <div class="input-group">
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
                <input type="tel" placeholder="Mobile Phone" required>
            </div>
            <div class="input-group">
                <select required>
                    <option value="" disabled selected>Mode of Payment</option>
                    <option value="credit">Credit Card</option>
                    <option value="debit">Debit Card</option>
                    <option value="paypal">Gcash</option>
                </select>
            </div>
            <div class="input-group">
                <textarea placeholder="Enter any additional comments..."></textarea>
            </div>
            <div class="checkbox-group">
                <label><input type="checkbox">Remember Me</label>
                <label><input type="checkbox" required>I agree to SKN Aesthetic Center  <a href="#"> privacy policy</a></label>
            </div>
            <div class="cancellation-policy">
                <h3>Cancellation policy</h3>
                <p>For any cancellation or changes in the appointment, please contact the clinic directly:</p>
                <p>(+63) 943692-4775, <a href="mailto:cc@sknaestheticcenter.com">cc@sknbeautycentre.com</a>.</p>
                <p>Thank You!</p>
                <label><input type="checkbox" required>I agree</label>
            </div>
            <button id="continue-btn" class="continue-button" onclick="fadeOutAndRedirect('confirm.html')">continue</button>
        </form>
    </div>

    <script>
        function fadeOutAndRedirect(page) {
            document.body.classList.add("fade-out");
            setTimeout(() => {
                window.location.href = page;
            }, 500);
        }
    </script>
</body>
</html>
