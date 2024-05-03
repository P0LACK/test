<?php

session_start();

if (isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin";
    $password = "admin";

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['user'] = $username;
        header("Location: ../index.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <?php if(isset($error)) { echo "<p class='error'>$error</p>"; } ?>
    </form>
</div>
<script src="login.js"></script>
</body>
</html>
