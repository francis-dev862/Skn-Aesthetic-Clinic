<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SKN Aesthetic Center</title>
        <link rel="stylesheet" href="Homie.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="navdiv">
                <div class="nav-left"><a href="#">SKN Aesthetic Center</a></div>
                <ul>
                    <li>About Us</li>
                    <li>FAQ</li>
                    <li>Contact Us</li>
                    <li><button onclick="fadeOutAndRedirect('#')">LOG IN</button></li>
                </ul>
            </div>
        </nav>
        <div>
            <div class="homepage">
                <h2>SKN Appointment System</h2>
                <p class="tagline">"Take time to make your SKN happy with SKN Aesthetic Center"</p>
            </div>
        </div>
        <div><button class="book-btn" onclick="fadeOutAndRedirect('branch.php')">BOOK NOW</button></div>

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
<?php
?>
