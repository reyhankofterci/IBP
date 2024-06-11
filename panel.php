<?php
session_start();
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: panelgiris.php");
    exit;
}

include("baglanti.php");

// Contact tablosundan verileri çek
$query_contact = "SELECT * FROM contact";
$result_contact = $baglan->query($query_contact);

// Randevu formundan verileri çek
$query_appointment = "SELECT * FROM randevuform";
$result_appointment = $baglan->query($query_appointment);

// Login formundan verileri çek
$query_users = "SELECT * FROM users";
$result_users = $baglan->query($query_users);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgba(83, 6, 6, 0.833);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?></h1>
    <a href="cikis.php">Logout</a>

    <!-- CONTACT TABLE -->
    <h2>CONTACT TABLE</h2>
    <table id="customers">
        <tr>
            <th>Name Surname</th>
            <th>E-Mail</th>
            <th>Phone Number</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <?php
        if ($result_contact->num_rows > 0) {
            while ($row = $result_contact->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . htmlspecialchars($row['Name Surname']) . "</td>
                    <td>" . htmlspecialchars($row['E-mail']) . "</td>
                    <td>" . htmlspecialchars($row['Phone Number']) . "</td>
                    <td>" . htmlspecialchars($row['Subject']) . "</td>
                    <td>" . htmlspecialchars($row['Message']) . "</td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='5'>No data stored in the contact database was found</td></tr>";
        }
        ?>
    </table>

    <br><br><br>

    <!-- APPOINTMENT TABLE -->
    <h2>APPOINTMENT TABLE</h2>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Extreme Sports</th>
            <th>Text</th>
        </tr>
        <?php
        if ($result_appointment->num_rows > 0) {
            while ($row = $result_appointment->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . htmlspecialchars($row['Name Surname']) . "</td>
                    <td>" . htmlspecialchars($row['E-mail']) . "</td>
                    <td>" . htmlspecialchars($row['Phone Number']) . "</td>
                    <td>" . htmlspecialchars($row['Date']) . "</td>
                    <td>" . htmlspecialchars($row['Time']) . "</td>
                    <td>" . htmlspecialchars($row['Extreme Sports']) . "</td>
                    <td>" . htmlspecialchars($row['Text']) . "</td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='7'>No data stored in the appointment database was found</td></tr>";
        }
        ?>
    </table>

    <br><br><br>

    <!-- USERS TABLE -->
    <h2>USERS TABLE</h2>
    <table id="customers">
        <tr>
            <th>Username</th>
            <th>E-Mail</th>
            <th>Password</th>
        </tr>
        <?php
        if ($result_users->num_rows > 0) {
            while ($row = $result_users->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . htmlspecialchars($row['Username']) . "</td>
                    <td>" . htmlspecialchars($row['E-Mail']) . "</td>
                    <td>" . htmlspecialchars($row['Password']) . "</td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='3'>No data stored in the users database was found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
