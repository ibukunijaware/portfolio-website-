<?php
    $header = "EDUCATION";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>

    <link rel="stylesheet" href="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/reset.css">
	<link rel ="stylesheet" href ="../CSS/education.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../mediaQueries/mobileEducation.css" media="screen and (max-width: 480px)" />
	<link rel="stylesheet" href="../mediaQueries/tabletEducation.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
	<link rel="stylesheet" href="../mediaQueries/desktopEducation.css" media="screen and (min-width: 769px)" />

</head>
<body>
    <header> 
        <h1> <?php echo $header; ?> </h1>

        <nav>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="experience.php"> Experience </a></li>
                <li><a href="aboutMe.php"> About Me </a></li>
                <li><a href="skills.php"> Skills </a></li>
                <li><a href="portfolio.php"> Portfolio </a></li>
                <li><a href="viewBlog.php">View Blog</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <article class = "educationContainer">
             <section class = "educationItem">
                <div class = "mainPart">
                    <ul>  
                            <h2> Queen Mary University of London </h2>
                            <p> BSc Computer Science and Artificial Intelligence (September 2025 - Present) </p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class = "educationItem">
                <div class = "mainPart">
                    <ul>  
                            <h2> Brookstone School </h2>
                            <p> Foundation Degree, ENGINEERING (September 2024 - June 2025) </p>
                        </li>
                    </ul>
                </div>
            </section>
        </article>
    </main>
    <footer>
        <p>Copyright &copy; 2026 Ibukunoluwa Ijaware. All rights reserved. </p>
    </footer>  
</body>
</html>