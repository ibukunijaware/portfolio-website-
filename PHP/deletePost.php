<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}


$conn = new mysqli("localhost","root","","blog");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset ($_POST["id"])) {
        $id = (int) $_POST["id"];
    } else {
       $id = 0; 
    }

   //only delete if id is valid
    if ($id > 0) {
        $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->bind_param("i", $id);


    if ($stmt->execute()){
        header("Location: viewBlog.php");
        exit();
    } else {
        echo "Delete failed.";
    }

    $stmt->close();
} 
}


$conn->close();
?>