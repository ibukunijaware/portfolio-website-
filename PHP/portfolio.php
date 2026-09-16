<?php
$header = "PORTFOLIO";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/reset.css">
	<link rel ="stylesheet" href ="../CSS/portfolio.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../mediaQueries/mobilePortfolio.css" media="screen and (max-width: 480px)" />
	<link rel="stylesheet" href="../mediaQueries/tabletPortfolio.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
	<link rel="stylesheet" href="../mediaQueries/desktopPortfolio.css" media="screen and (min-width: 769px)" />

</head>
<body>
    <header> 
        <h1> <?php echo $header; ?> </h1>
        <nav>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="education.php"> Education </a></li>
                <li><a href="aboutMe.php"> About Me </a></li>
                <li><a href="skills.php"> Skills </a></li>
                <li><a href="experience.php"> Experience </a></li>
                <li><a href="viewBlog.php">View Blog</a></li>
            </ul>
        </nav>
    </header>

    <main> 
        <h2> Some of the Projects I have Worked on are:</h2>
        <article class="projectContainer"> 

            <section>
                <div class="projects">
                    <h3> Project 1</h3>

                    <ul>
                        <h4> Typing Race Simulator </h4>
                        <p> A web-based application that allows users to test and improve their typing speed and accuracy by racing against a virtual opponent. <br>The application provides a fun and interactive way for users to practice their typing skills while competing against a computer-generated opponent. </p>
                        <a href = "../Projects/TypingRaceSimulator (1).zip"> Link</a>
                    </ul>
                </div>
            </section>

            <section>
                <div class="projects">
                    <h3> Project 2</h3>

                    <ul>
                        <h4> My First Website </h4>
                        <p> A simple static website built using HTML and CSS to showcase my skills and projects. </p>
                        <a href = "../Projects/Ibukunoluwa-phase1.zip"> Link</a>
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