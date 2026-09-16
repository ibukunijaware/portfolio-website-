<?php
	$name = "IBUKUNOLUWA IJAWARE";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>

	<link rel ="stylesheet" href ="../CSS/reset.css">
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/index.css">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../mediaQueries/mobileIndex.css" media="screen and (max-width: 480px)" />
	<link rel="stylesheet" href="../mediaQueries/tabletIndex.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
	<link rel="stylesheet" href="../mediaQueries/desktopIndex.css" media="screen and (min-width: 769px)" />

</head>

<body>
	<header>
		<h1><?php echo $name; ?></h1>

		<nav>
			<ul>
				<li><a href="aboutme.php"> About Me </a></li>
				<li><a href="experience.php"> Experience </a></li>
				<li><a href="education.php"> Education </a></li>
				<li><a href="skills.php"> Skills </a></li>
				<li><a href="portfolio.php"> Portfolio </a></li>
				<li><a href="viewBlog.php">View Blog</a></li>
		    </ul>
	     </nav>
	</header>

	<aside>

		<?php 
		session_start();

		if(isset($_SESSION["user"])){
			echo "<h2>Welcome " . $_SESSION["user"] . "</h2>";
			echo '<a href="login.php">
			<button type="button" class="indexButtonContainer">LOGIN</button>
			</a>';
		}

		else{
		?>
			<h2> Welcome to my portfolio</h2>
			<a href="login.php" id="login">
				<button type="button" class="indexButtonContainer">LOGIN</button>
			</a>
		<?php
		}
		?>
	</aside>
	<main>
		<article class="socialsContainer">
				<figure>
					<a href="https://www.linkedin.com/in/ibukunoluwa-ijaware-601968303/">
					<img src="../Images/linkedin_image.jpg" alt="LinkedIn Logo" >
					</a>
				</figure>
			
				<figure>
					<a href="https://github.com/ibukunijaware">
					<img src="../Images/github_image.jpg" alt="GitHub Logo" >
					</a>
				</figure>
		</article>
	</main>

	<footer>
		<p>Copyright &copy; 2026 Ibukunoluwa Ijaware. All rights reserved. </p>
	</footer>

</body>
</html>
