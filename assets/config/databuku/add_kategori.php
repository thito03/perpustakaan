<?php
session_start();


// memasukkan data kategori ke database
if (isset($_POST['submit'])) {
    include_once '../conn.php';

    $nama_kategori = $_POST['nama_kategori'];
    $query = "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')";
    $result = mysqli_query($conn, $query);
    
    header("Location: ../../../main.php?main=kategori");
    exit();
}else {
    $_SESSION['error'] = "Gagal menambahkan kategori. Silakan coba lagi.";
    header("Location: ../../../main.php?main=kategori");
}
?>