<?php
session_start();

$_SESSION['patientFN']   = $_POST['firstname'];
$_SESSION['patientSN']   = $_POST['surname'];
$_SESSION['bookingdate'] = $_POST['bookingdate'];
$_SESSION['bookingtime'] = $_POST['bookingtime'];
$_SESSION['treatment']   = $_POST['treatment'];

header("Location: confirm.php");

?>
