<?php
include('conn.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($fullname) || empty($email) || empty($password)) {
    header('Location: ../../log/auth-register.html?error=1');
    exit();
}
if ($_POST['job'] == 'admin') {
    $sql = "INSERT INTO admin (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
}
if ($_POST['job'] == 'pegawai') {
    $sql = "INSERT INTO pegawai (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
}
if (mysqli_query($conn, $sql)) {
    header('Location: ../../log/auth-register.html?success=1');
    exit();
} 
?>