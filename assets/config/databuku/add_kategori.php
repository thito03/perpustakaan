<?php
session_start();

// memasukkan data kategori ke database
if (isset($_POST['submit'])) {
    include '../conn.php';

    $nama_kategori = $_POST['nama_kategori'];
    $query = "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['success']['simpan_k'] = "Kategori berhasil ditambahkan.";
        header("Location: ../../../main.php?main=kategori");
        exit();
    } else {
        header("Location: ../../../main.php?main=kategori");
        exit();
    }
}
?>