<?php 
session_start();

if(!isset($_SESSION["user"])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="../CSS/style.css">
	<link rel ="stylesheet" href ="../CSS/reset.css">
	<link rel ="stylesheet" href ="../CSS/addEntry.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../mediaQueries/mobileaddEntry.css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" href="../mediaQueries/tabletaddEntry.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
    <link rel="stylesheet" href="../mediaQueries/desktopaddEntry.css" media="screen and (min-width: 769px)" />

    <script defer src="../js/addEntry.js"></script>

</head>
<body>
    <header> 
        <h1>BLOG</h1>

        <nav> 
         <ul>
            <li><a href="index.php">Back Home</a></li>
            <li><a href="viewBlog.php">View Blog</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
        </nav>
    </header>

    <aside> 
        <h2>
           Welcome <?php echo $_SESSION["user"]; ?>
        </h2>
    </aside>

    <main> 
        <form id="blogForm" method="POST" action="addPost.php">
             <fieldset> 
                <legend>Add New Post</legend> 
                <div>
                    <input type="text" id="title" name="title" placeholder="Title" 
                    value="<?php echo isset($_SESSION['preview_post']['title']) ? htmlspecialchars($_SESSION['preview_post']['title']) : ''; ?>">
                </div> 
                
                <div> 
                    <textarea id="content" name="content" placeholder="Enter your text here"><?php
                        echo isset($_SESSION['preview_post']['content']) ? htmlspecialchars($_SESSION['preview_post']['content']): '';
                    ?></textarea> 
                </div> 
                
                <div class="buttonWrapper"> 
                    <div class="topButtons">
                        <input type="submit" name="action" value="Post" class="buttonContainer"> 
                        <input type="submit"  name ="action" value="Preview" class="buttonContainer"> 
                     </div>

                    <div class="bottomButton">
                        <input type="button" value="Clear" id="clearBtn" class="buttonContainer"> 
                    </div> 
                </div>    
            </fieldset> 
        </form>
    </main>

    <footer>
        <p>Copyright &copy; 2026 Ibukunoluwa Ijaware. All rights reserved. </p>
    </footer>  
    
</body>
</html>