<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="container1">
        <form action="" method="post" class="form1" id="adminLoginForm">
            <h2 class="form__title1">Admin Login</h2>
            <input type="text" name="username" placeholder="Username" class="input1" id="username" required>
            <input type="password" name="password" placeholder="Password" class="input1" id="password" required>
            <button type="submit" class="btn1">Login</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if ($username == "admin" && $password == "123") {
            $_SESSION["user"] = $username;
            header("Location: panel.php");
            exit;
        } else {
            echo "<script>alert('Username or Password is Incorrect');</script>";
        }
    }
}
?>
