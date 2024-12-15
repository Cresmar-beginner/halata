<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM appointments WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Appointment deleted successfully.";
    } else {
        echo "Error deleting appointment: " . $conn->error;
    }
    $conn->close();
}
?>
<br><a href="view_appointments.php">Back to Appointments</a>