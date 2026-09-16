<?php
session_start();

if(isset($_SESSION["user"])){
    header("Location: addEntry.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/reset.css">
	<link rel ="stylesheet" href ="../CSS/login.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../mediaQueries/mobilelogin.css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" href="../mediaQueries/tabletlogin.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
    <link rel="stylesheet" href="../mediaQueries/desktoplogin.css" media="screen and (min-width: 769px)" />

</head>
<body>
    <header>
        <h1>LOGIN</h1>

        <nav>
         <ul>
            <li><a href="index.php">Back Home</a></li>
        </ul>
        </nav>
    </header>

    <main>
        <form method = "POST" action="loginProcess.php">
            <fieldset>
                <legend>Login Details</legend>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div>
                    <input type="submit" value="LOGIN" class="buttonContainer">
                </div>

            </fieldset>
        </form>
    </main>

    <footer>
        <p>Copyright &copy; 2026 Ibukunoluwa Ijaware. All rights reserved. </p>
    </footer>
</body>
</html>