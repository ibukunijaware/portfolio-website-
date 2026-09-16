<?php
    $header = "MY SKILLS";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>

    <link rel="stylesheet" href="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/reset.css">
	<link rel ="stylesheet" href ="../CSS/skills.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../mediaQueries/mobileSkill.css" media="screen and (max-width: 480px)" />
	<link rel="stylesheet" href="../mediaQueries/tabletSkill.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
	<link rel="stylesheet" href="../mediaQueries/desktopSkill.css" media="screen and (min-width: 769px)" />

</head>
<body>
    <header> 
        <h1> <?php echo $header; ?> </h1>

        <nav> 
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="experience.php"> Experience </a></li>
                <li><a href="aboutMe.php"> About Me </a></li>
                <li><a href="education.php"> Education </a></li>
                <li><a href="portfolio.php"> Portfolio </a></li>
                <li><a href="viewBlog.php">View Blog</a></li>
            </ul>
        </nav>
    </header>

    <main> 
        <article class =skillsContainer> 
            <section> 
                <div class ="skillsGroup"> 
                    <h2>Front-End Technologies</h2>
                    <ul> 
                        <li>HTML</li>
                        <li>CSS</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class ="skillsGroup">
                    <h2>Back-End Technologies</h2>
                    <ul> 
                        <li>Java</li>
                        <li>PHP</li>
                    </ul>
                </div>
            </section>
            
            <section>
                <div class ="skillsGroup"> 
                    <h2>Other Skills</h2>
                    <ul> 
                        <li>Teamwork</li>
                        <li>Fast Learning </li>
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