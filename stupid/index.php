<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Appointment Scheduler</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Book an Appointment</h1>
    <form action="create_appointment.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br><br>

        <button type="submit">Book Appointment</button>
    </form>
    <br>
    <a href="view_appointments.php">View All Appointments</a>
</body>
</html>