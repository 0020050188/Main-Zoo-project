<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--SHEET LINKS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../PHP_scripts/login_hero.css">
        <link rel="stylesheet" href="../PHP_scripts/feature_gallery.css">
        <link rel="stylesheet" href="../PHP_scripts/navv_style.css">
        <link rel="stylesheet" href="../PHP_scripts/login.css">
        <link rel="stylesheet" href="../PHP_scripts/register.css">
    <title>Register Form</title>
</head>

<body>  
    <nav>
        <!--COMPANY NAME-->
        <div class = "nav_left">
            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 2L2 12h3v8h5v-6h4v6h5v-8h3L12 2z"/>
            </svg>-->
        <span class = "company_name">Riget Zoo Adventures</span>
        </div>

        <!--BOTTOM ROW BUTTONS-->
        <ul class = "navbar">
            <li><a href= "About.html">About Us</a></li>
            <li><a href="Find us.html">Find Us</a></li>
            <li><a href= "../PHP_scripts/html_zoo.html">Home</a></li>
        </ul>
    </nav>

    <!--HERO TEXT-->
    <section class = "hero">
        <div class = "hero-content">
            <h2>Rige Zoo Adventures</h2>
            <p>Welcome to the register page!</p>
        </div>
    </section> 
    
    <!--REGISTER TEXT-->
    <section class="register_title" aria-labelledby="register-title">
        <h2 class="register-title" style="color: var(--main-text-color)">Enter your details to register as a new explorer!</h2>
    </section>

    <!--REGISTER BOX-->
    <section class = "register_container_row">
        <div class = "register_box">
            <form action = "/PHP_scripts/register_script.php" method = "POST">  <!-- The POST method is more secure than the GET method as the queries are not public,
                meaning people cannot change or alter them -->
                <label for="firstName">First Name:</label>
                <input type="text" placeholder="First Name" id="firstName" name="firstName" required>

                <label for="surname">Surname:</label>
                <input type="text" placeholder="Surname" id="surname" name="surname" required>

                <label for="email">Email:</label>
                <input type="text" placeholder="Email" id="email" name="email" required>

                <label for="mobileNumber">Mobile Number:</label>
                <input type="number" placeholder="Mobile Number" id="mobileNumber" name="mobileNumber" required>

                <label for="dateOfBirth">Date of Birth:</label>
                <input type="date" id="dateOfBirth" name="dateOfBirth" required>

                <label for="username">Username:</label>
                <input type="text" placeholder="Username" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="text" placeholder="Password" id="password" name="password" required>

                <button type="submit">Register</button>
            </form>
        </div>
    </section>
    <script src="../JavaScript/dob_validation"></script>
</body>
</html>
