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
        <form action="login.php" method="post" class="form1" id="adminLoginForm">
            <h2 class="form__title1">LOGIN</h2>
            <input type="text" name="username" placeholder="Username" class="input1" id="username" required>
            <input type="password" name="password" placeholder="Password" class="input1" id="password" required>
            <button type="submit" class="btn1">Login</button>
            <div class="separator">OR</div>
            <br>
            <a href="register.php" class="admin-link">Create a new account</a>
            <a href="panelgiris.php" class="admin-link">Go to admin page</a>
        </form>
    </div>
</body>
</html>

<?php
session_start();
include("baglanti.php");

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE `Username` = '$username' AND `Password` = '$password'";
    $result = mysqli_query($baglan, $query);

    if(mysqli_num_rows($result) > 0) {
        $_SESSION["user"] = $username;
        header("Location: user.php");
        exit;
    } else {
        echo "<script>alert('Invalid username or password')</script>";
    }

    mysqli_close($baglan);
}
?>
