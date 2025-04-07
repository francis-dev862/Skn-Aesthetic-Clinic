<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>SKN Aesthetic Center</title>
        <link rel="stylesheet" href="Homie.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">SKN Aesthetic Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                <button type="button" class="btn btn-outline-light btn-lg shadow" data-bs-toggle="modal" data-bs-target="#login_modal">
            Log In
        </button>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- MODAL FOR CHOOSING CLIENT OR ADMIN SIDE -->
        <!-- Login Modal -->
        <div class="modal fade" id="login_modal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(to right, #F7EF8A, #D2AC47, #EDC967 );">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="mb-3">
                    <label for="username" class="form-label">Email</label>
                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #F7EF8A, #D2AC47, #EDC967 ); border-radius: 10px; border: 1px solid white; box-shadow: 0 4px 8px rgba(0,0,0,0.2); width: 150px; height: 50px; font-size: 18px;">Submit</button>
                    </div>
                </form>
                </div>
                <div>
                <p style="text-align:center; margin-top: 15px">Don't have an account? <a href="Sign_up_Modal.php">Sign up here</a></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Sign Up Modal -->
  

           <!-- ADMIN Login Modal -->
           <div class="modal fade" id="Admin_login_Modal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(to right, #F7EF8A, #D2AC47, #EDC967 );">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="mb-3">
                    <label for="username" class="form-label">Email</label>
                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #F7EF8A, #D2AC47, #EDC967 ); border-radius: 10px; border: 1px solid white; box-shadow: 0 4px 8px rgba(0,0,0,0.2); width: 150px; height: 50px; font-size: 18px;">Submit</button>
                    </div>
                </form>
                </div>
                <div>
                <p style="text-align:center; margin-top: 15px">Don't have an account? <a href="#">Sign up here</a></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
            </div>
        </div>
        <div>
            <div class="homepage">
                <h2 style="font-size: 80px; font-family: Times New Roman; ">SKN Appointment System</h2>
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
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="view/index-script.js"></script>
    <script src="view/index-function.js"></script>
    </body>
</html>
<?php
?>
