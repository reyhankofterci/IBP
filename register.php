<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="container1">
        <form action="register.php" method="post" class="form1" id="adminRegisterForm">
            <h2 class="form__title1">REGISTER</h2>
            <input type="text" name="username" placeholder="Username" class="input1" id="username" required>
            <input type="email" name="email" placeholder="E-Mail" class="input1" id="email" required>
            <input type="password" name="password" placeholder="Password" class="input1" id="password" required>
            <button type="submit" name="register" class="btn1">Register</button>
        </form>
    </div>
</body>
</html>

<?php
include("baglanti.php");

if(isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $ekle = "INSERT INTO users (`Username`, `E-Mail`, `Password`) VALUES ('$username', '$email', '$password')";
    $calistirekle = mysqli_query($baglan, $ekle);

    if($calistirekle){
        echo "<script>alert('Registration was successful.') </script>";
    } else {
        echo "<script>alert('There was a problem adding the registration.')</script>";
    }

    mysqli_close($baglan);
}
?>