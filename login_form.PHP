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
    <title>Login Form</title>
</head>

<body>
    <nav>
        <!--COMPANY NAME-->
        <div class = "nav_left">
                <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2L2 12h3v8h5v-6h4v6h5v-8h3L12 2z"/>
                </svg>-->
        <span class = "company_name">Riget Zoo Adventures </span>
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
            <p>Welcome to the login page!</p>
        </div>
    </section>

    <!--LOGIN TEXT-->
    <section class="login_title" aria-labbelledby="login-title">
        <h2 class="login-title" style="color: var(--main-text-color)">Enter your login details below</h2>
        <p class="login_para" style="color:var(--main-text-color)">Or click the link to register as a new explorer!</p>
    </section>

    <!--LOGIN BOX-->
    <section class = "login_container_row">
        <div class = "form_box">
            <form action = "../PHP_scripts/login_script.php" method = "POST">
                <label for="username">Username:</label>
                <input type="text" placeholder="Username" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" placeholder="Password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
            <p class="register_link">Don't have an account?<a href="register_form.php">Register Here</a>
            </p>
        </div>
    </section> 
</body>
</html>