<?php
$header = "EXPERIENCE";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>

    <link rel="stylesheet" href="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/reset.css">
	<link rel ="stylesheet" href ="../CSS/experience.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../mediaQueries/mobileExperience.css" media="screen and (max-width: 480px)" />
	<link rel="stylesheet" href="../mediaQueries/tabletExperience.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
	<link rel="stylesheet" href="../mediaQueries/desktopExperience.css" media="screen and (min-width: 769px)" />

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
                    <li><a href="portfolio.php"> Portfolio </a></li>
                    <li><a href="viewBlog.php">View Blog</a></li>
                </ul>
            </nav>
    </header>

    <main> 
        <article class ="xpContainer"> 
            
            <section> 
                <div class="experience"> 
                    <h2>Work Experience</h2>

                    <ul> 
                        <li> 
                            <h3> Volunteering Experience</h3>
                            <p> I volunteered at a church event to register the attendees for an event</p>
                        </li>

                    </ul>
                </div>
            </section>

            <section> 
                <div class="experience"> 
                    <h2>Additional Experience</h2>

                    <ul> 
                        <li> 
                            <h3> Leadership Experience</h3>
                            <p> I was the manager of two school projects in Professional and Research Practice.</p>

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