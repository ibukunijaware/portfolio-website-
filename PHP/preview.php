<?php
session_start();
if(!isset($_SESSION['preview_post'])){
    header("Location: addEntry.php");
    exit();
}
$post = $_SESSION['preview_post'];
$title= "Preview Post";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/preview.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../mediaQueries/mobilePreview.css" media="screen and (max-width: 480px)" />
	<link rel="stylesheet" href="../mediaQueries/tabletPreview.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
	<link rel="stylesheet" href="../mediaQueries/desktopPreview.css" media="screen and (min-width: 769px)" />



</head>
<body>
    <main>
        
        <h2>PREVIEW: <?php echo htmlspecialchars($post['title']); ?></h2>
        <hr>
        <p class="post-content"><?php echo htmlspecialchars($post['content']); ?> </p>
        <div class="buttonRow">
            <a href="addEntry.php" class="buttonContainer">Go back to edit</a>

            <form action="addPost.php" method="POST">
                <input type="hidden" name="action" value="Confirm">
                <input type="submit" value="Confirm & Publish" class=buttonContainer>
            </form>
        </div>
    </main>

    <footer>
		<p>Copyright &copy; 2026 Ibukunoluwa Ijaware. All rights reserved. </p>
	</footer>

</body>
</html>