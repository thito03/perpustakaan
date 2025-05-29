<?php
$email = $_POST['email'];
$pass = $_POST['password'];

include('conn.php');
$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass' UNION SELECT * FROM pegawai WHERE email = '$email' AND password = '$pass';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['login'] = true;
    header('Location: ../../main.php?main=dashboard');
    exit();
} else {
    header('Location: ../../log/auth-login.html?error=1');
    exit();
}
?>