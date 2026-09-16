<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "blog"; 

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

   // Check if the request is coming from Preview
   if(isset($_POST['action'])&& $_POST['action']==='Confirm'){
    if(isset($_SESSION['preview_post'])){
        $title=$_SESSION['preview_post']['title'];
        $content = $_SESSION['preview_post']['content'];

         $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
         $stmt-> bind_param("ss", $title, $content);

         if($stmt-> execute()){
            unset($_SESSION['preview_post']); // cleanup
            header("Location: viewBlog.php");
            exit();
         }else{
            echo "Error: " . $stmt-> error;
         }
         $stmt-> close();
    }
    else{
        header("Location: addEntry.php");
        exit();
    }
   }

    // Validate submission from addEntry.php
    $title = trim($_POST["title"]);
    $content = trim($_POST["content"]);


    if (empty($title) || empty($content)) {
        die("Title and content are required.");
    }

    $action = $_POST['action'];

    if($action === 'Preview'){
        // saves the post temporarily in the session
        $_SESSION['preview_post'] =['title' => $title,'content' => $content];
        header("Location: preview.php");
        exit();
    }
    elseif($action === 'Post') {
    // Post directly
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt-> bind_param("ss", $title, $content);


    if ($stmt->execute()) {
        // Clear the draft and redirect
        unset($_SESSION['preview_post']);
        header("Location: viewBlog.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
}

$conn->close();
?>

