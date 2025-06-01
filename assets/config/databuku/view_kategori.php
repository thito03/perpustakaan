<?php
include 'assets/config/conn.php';
$no = 1;
$query = "SELECT * FROM kategori";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        print "
        <tr>
            <td>$no</td>
            <td>$row[nama_kategori]</td>
            <td><a href='?hapus=$row[id_kategori]' class='btn btn-danger'>hapus</a></td>
            <td>ubah</td>
        ";
        $no++;
    }
    if (isset($_GET['hapus'])) {
        $id_kategori = $_GET['hapus'];
        $delete_query = "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
        print "Kategori berhasil dihapus.";
    }
} else {
    print "<tr><td colspan='3' class='text-center'>Tidak ada kategori.</td></tr>";
}
?>
