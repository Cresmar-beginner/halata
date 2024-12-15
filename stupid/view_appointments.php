<?php
include 'db_connection.php';

// Fetch all appointments
$sql = "SELECT id, name, email, date, time FROM appointments ORDER BY date, time";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointments</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Scheduled Appointments</h1>

    <!-- Add Appointment Form -->
    <h2>Add New Appointment</h2>
    <form action="create_appointment.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br><br>

        <button type="submit">Add Appointment</button>
    </form>

    <h2>All Scheduled Appointments</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Time</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['date']}</td>
                        <td>{$row['time']}</td>
                        <td><a href='delete_appointment.php?id={$row['id']}'>Delete</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No appointments scheduled.</td></tr>";
        }
        ?>
    </table>
    <br><a href="index.php">Back to Home</a>

</body>
</html>