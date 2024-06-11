<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
    <div class="reservation-form">
        <h1>Appointment Request Form</h1>
        <p>Please fill the form below accurately to enable us to serve you better! Welcome!</p>
        <form id="reserveForm" action="" method="POST">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="isim" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="tel" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="date">Reservation Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Preferred Time</label>
                <select id="time" name="time" required>
                    <option value="">Please Select</option>
                    <option value="11:00">11:00</option>
                    <option value="13:00">13:00</option>
                    <option value="15:00">15:00</option>
                    <option value="17:00">17:00</option>
                    <option value="19:00">19:00</option>
                    <option value="21:00">21:00</option>
                </select>
            </div>
            <div class="form-group">
                <label for="reservationType">Extreme Sports</label>
                <select id="reservationType" name="extremesports" required>
                    <option value="">Please Select</option>
                    <option value="Bungee Jumping">Bungee Jumping</option>
                    <option value="Sky Diving">Sky Diving</option>
                    <option value="Surfing">Surfing</option>
                    <option value="Paragliding">Paragliding</option>
                    <option value="Scuba Diving">Scuba Diving</option>
                    <option value="Snowboarding">Snowboarding</option>
                    <option value="Rafting">Rafting</option>
                    <option value="Mountain Biking">Mountain Biking</option>
                </select>
            </div>
            <div class="form-group">
                <label for="requests">Any Special Requests</label>
                <textarea id="requests" name="text"
                placeholder="Enter any special requests"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
include("baglanti.php");

if(isset($_POST["isim"], $_POST["email"], $_POST["tel"], $_POST["date"], $_POST["time"], $_POST["extremesports"], $_POST["text"]))
{
    $namesurname = $_POST["isim"];
    $email = $_POST["email"];
    $phonenumber = $_POST["tel"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $extremesports = $_POST["extremesports"];
    $text= $_POST["text"];

    // Use prepared statements to prevent SQL injection
    $stmt = $baglan->prepare("INSERT INTO randevuform (`Name Surname`, `E-mail`, `Phone Number`, `Date`, `Time`, `Extreme Sports`, `Text`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $namesurname, $email, $phonenumber, $date, $time, $extremesports, $text);

    if($stmt->execute())
    {
        echo "<script>alert('Your Message has been sent successfully.')</script>";
    }
    else
    {
        echo "<script>alert('An error occurred while sending your message.')</script>";
    }
    $stmt->close();
}
?>
