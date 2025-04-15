<?php
require "../includes/conn.php";
session_start();

$email = $_POST['email'];
$email = mysqli_real_escape_string($conn, $email);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($conn, $pass);
$pass = md5($pass);

// $first = $_POST['fname'];
// $first = mysqli_real_escape_string($con, $first);

// $last = $_POST['lname'];
// $last = mysqli_real_escape_string($con, $last);

$mobile = $_POST['mobile'];
$mobile = mysqli_real_escape_string($conn, $mobile);

echo $mobile;
echo $pass;
echo $mobile;

$query1 = "UPDATE seller SET password='$pass' where email='$email' and mobile='$mobile'";
$res = mysqli_query($conn, $query1);

if ($res) {

    echo "<script>alert('Password Sucessfully Update');document.location='../login.php';</script>";

} else {
    echo "<script>alert('No Record Found');document.location='../register.php';</script>";
}


?>