<?php
session_start();

// memasukkan data penerbit ke database
if (isset($_POST['submit'])) {
    include '../conn.php';

    $nama_penerbit = $_POST['nama_penerbit'];
    $query = "INSERT INTO penerbit (nama_penerbit) VALUES ('$nama_penerbit')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['success']['simpan_p'] = "penerbit berhasil ditambahkan.";
        header("Location: ../../../main.php?main=penerbit");
        exit();
    } else {
        header("Location: ../../../main.php?main=penerbit");
        exit();
    }
}
?>