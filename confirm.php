<?php
session_start();

$fn          = $_SESSION['patientFN'];
$sn          = $_SESSION['patientSN'];
$bookingDate = $_SESSION['bookingdate'];
$bookingTime = $_SESSION['bookingtime'];
$treatment   = $_SESSION['treatment'];

include("dbcon.php");

$sqlPatient = "INSERT INTO patientname (firstname, surname)
               VALUES ('$fn', '$sn')";

if (mysqli_query($conn, $sqlPatient)) {
  echo "Patient was added successfully<br>";
} else {
  echo "Error: " . $sqlPatient . "<br>" . mysqli_error($conn);
}

$sqlAppointment = "INSERT INTO appointmentbooking (bookingtime, bookingdate, treatment)
                   VALUES ('$bookingTime', '$bookingDate', '$treatment')";

if (mysqli_query($conn, $sqlAppointment)) {
  echo "Appointment was booked successfully";
} else {
  echo "Error: " . $sqlAppointment . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
session_destroy();
?>
