<?php 
session_start();

$host ="localhost";
$username="root";
$password="";
$dbname = "portfolio";

$conn= mysqli_connect(
$host,
$username,
$password,
$dbname
);

if(!$conn){
    die("Connection failed");
}

$email=$_POST["email"];
$userPassword=$_POST["password"];

$sql = "SELECT * FROM users
WHERE email='$email' AND password = '$userPassword'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
    $_SESSION["user"] = $email;

    header("Location: addEntry.php");
    exit();
}
else{
    echo"<div class='errorContainer'>";
    echo"<p class='errorMessage'>Invalid email or password</p>";
    echo"<a href='login.php'>Try again</a>";
    echo"</div>";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>

    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/loginProcess.css">

    <link rel="stylesheet" href="../mediaQueries/mobileloginProcess.css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" href="../mediaQueries/tabletloginProcess.css" media="screen and (min-width: 481px) and (max-width: 768px)" />
    <link rel="stylesheet" href="../mediaQueries/desktoploginProcess.css" media="screen and (min-width: 769px)" />

</head>

</html>