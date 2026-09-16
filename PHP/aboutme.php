<?php
$name = "IBUKUNOLUWA IJAWARE";
$title = "Aspiring AI Specialist";
$header = "ABOUT ME";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    
    <link rel="stylesheet" href="../CSS/reset.css">
	<link rel ="stylesheet" href ="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/aboutMe.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../mediaQueries/mobileaboutMe.css" media="screen and (max-width: 480px)" />
	<link rel="stylesheet" href="../mediaQueries/tabletaboutMe.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
	<link rel="stylesheet" href="../mediaQueries/desktopaboutMe.css" media="screen and (min-width: 769px)" />

    
</head>
<body>
    <header> 
        <h1> <?php echo $header; ?> </h1>

        <nav>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="experience.php"> Experience </a></li>
                <li><a href="education.php"> Education </a></li>
                <li><a href="skills.php"> Skills </a></li>
                <li><a href="portfolio.php"> Portfolio </a></li>
                <li><a href="viewBlog.php">View Blog</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <article class = "aboutContainer">

            <div>
                <section> 
                    <figure> 
                        <div class = "myPhoto">
                        <img src="../Images/my_photo.jpeg"
                            title= "<?php echo $name; ?>"
                            >
                        </div>
                            <figcaption> <?php echo $title; ?> </figcaption>
                    </figure>
                </section>
            </div>

            <div id="aboutMeText"> 
                <section> 
                    <h2>
                        Computer Science and Artificial Intelligence Undergraduate student at Queen Mary University of London. 
                    </h2>
                </section>

                <section> 
                    <p>
                    I aspire to become an AI specialist. I plan to complete my Bachelor's degree in Computer Science and Airtificial Intelligence to achieve this goal.I also intend to gain valuable work experience, which will help me develop resilience and gain a deeper level of understanding of the industry
                    </p>
                </section>
            </div>
        </article>

    </main>
    
    <footer>
		<p>Copyright &copy; 2026 Ibukunoluwa Ijaware. All rights reserved. </p>
	</footer>

</body>
</html>