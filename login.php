<?php

session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $connect->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
        exit;
    } else {
        echo "Invalid email or password! Please try again.";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login App</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    <h1>Login App</h1>

    <form action="" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" 
                value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
    
</body>
</html>
