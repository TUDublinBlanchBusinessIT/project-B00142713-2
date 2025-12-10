<?php
session_start();

if (!isset($_POST['confirm'])) {
    header("Location: appointmentForm.html");
    exit;
}

$fn          = $_SESSION['patientFN'];
$sn          = $_SESSION['patientSN'];
$bookingDate = $_SESSION['bookingdate'];
$bookingTime = $_SESSION['bookingtime'];

include("dbcon.php");

$sqlPatient = "INSERT INTO patientname (firstname, surname) VALUES ('$fn', '$sn')";

if (mysqli_query($conn, $sqlPatient)) {
  echo "Patient was added successfully<br>";
} else {
  echo "Error: " . $sqlPatient . "<br>" . mysqli_error($conn);
}

$sqlAppointment = "INSERT INTO appointmentbooking (bookingtime, bookingdate) VALUES ('$bookingTime', '$bookingDate')";

if (mysqli_query($conn, $sqlAppointment)) {
  echo "Appointment was booked successfully";
} else {
  echo "Error: " . $sqlAppointment . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
session_destroy();
?>
