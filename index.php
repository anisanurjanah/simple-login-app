<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Simple Login App</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    <h2>Welcome!</h2>

    <p>
        Welcome to this simple login application!
        This application was created as part of a basic learning project on PHP and MySQL.
        Here, you can explore concepts such as sessions, user authentication,
        and dynamic page management using the PHP programming language.
        It's perfect for beginners who are just starting their journey into the world of web development.
    </p>

    <a href="logout.php">Logout</a>
    
</body>
</html>
