<?php
session_start();

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "blog";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch posts without sorting
$sql = "SELECT id, title, content, created_at FROM posts";
$result = $conn->query($sql);

if($result-> num_rows==0){
    header("Location: login.php");
    exit();
}

$posts = [];

// Converts date string to timestamps inside the loop 
 while ($row = $result->fetch_assoc()) {
       $row['created_at'] = strtotime($row['created_at']);
        $posts[] = $row;
 }


 // Bubble sort 
   $s = count($posts);

   for($i=0; $i< $s-1; $i++){
        for($j=0; $j<$s-$i-1; $j++){
            if($posts[$j]['created_at']<$posts[$j+1]['created_at']){
                //Swap
                $temp =$posts[$j];
                $posts[$j]=$posts[$j +1];
                $posts[$j+1]=$temp;
            }
        }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Blog</title>

<link rel="stylesheet" href="../CSS/style.css">
<link rel="stylesheet" href="../CSS/reset.css">
<link rel="stylesheet" href="../CSS/viewBlog.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../mediaQueries/mobileviewBlog.css" media="screen and (max-width: 480px)" />
<link rel="stylesheet" href="../mediaQueries/tabletviewBlog.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
<link rel="stylesheet" href="../mediaQueries/desktopviewBlog.css" media="screen and (min-width: 769px)" />

</head>
<body>

<header>
    <h1>BLOG POSTS</h1>

    <nav>
        <ul>
            <li><a href="index.php">Back Home</a></li>
            <li><a href="addEntry.php">Add Post</a></li>
            <?php if (isset($_SESSION["user"])): ?>
                 <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                 <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    
</header>

<?php if(isset($_SESSION["user"])): ?>
<aside>
    <h2>Hello <?php echo $_SESSION["user"]; ?>!</h2>
</aside>
<?php endif; ?>

<main>
<?php
foreach ($posts as $post){
    echo "<article>";
    echo "<h2>" . htmlspecialchars($post['title']) . "</h2>";
    echo "<p class='post-content'>" .htmlspecialchars($post['content']) . "</p>";
    echo "<small> Posted on : " 
        . date ("d M Y, H:i", $post['created_at']) 
        . "</small>";
    // shows delete button only is the user is logged in 
    if (isset($_SESSION["user"])){
        echo '
        <form action= "deletePost.php" method="POST">
            <input type="hidden" name="id" value="' . $post['id'] . '">
            <input type="submit" value="Delete" class="buttonContainer">
        </form>
        ';
    }
    echo"<br>";
    echo "<hr>";
    echo "</article>";
}
?>
</main>

<footer>
    <p>Copyright &copy; 2026 Ibukunoluwa Ijaware. All rights reserved.</p>
</footer>

</body>
</html>

<?php
    $conn->close();
?>