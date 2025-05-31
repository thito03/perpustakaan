<?php
$email = $_POST['email'];
$pass = $_POST['password'];

include('conn.php');
$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass' UNION SELECT * FROM pegawai WHERE email = '$email' AND password = '$pass';";
$result = mysqli_query($conn, $sql);
session_start();
if (mysqli_num_rows($result) > 0) {
    $_SESSION['login'] = true;
    header('Location: ../../main.php?main=dashboard');
    exit();
} else {
    if (empty($email) || empty($pass)) {
        $_SESSION['err']['ep'] = 'Email atau Password tidak boleh kosong!';
        header('Location: ../../log/auth-login.php');
        exit();
    }
    $_SESSION['err']['e'] = 'Email atau Password salah!';
    header('Location: ../../log/auth-login.php');
    exit();
}
?>