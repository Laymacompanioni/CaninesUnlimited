<?php
session_start();
include("connections.php");
include("funcations.php");

$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <a href="logout.php">logoout</a>
    <h1>This is the index page</h1>
    <br>
    Hello, Username!
</body>
</html>