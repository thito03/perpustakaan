<div class="main-content">
    <div class="row">
        <form action="assets/config/databuku/add_kategori.php" method="POST" class="col-md-8 offset-md-2 mt-3">
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori:</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
            </div>
            <button type="submit" name="submit" class="btn btn-info mt-2">Simpan Kategori</button>
            <?php if (isset($_SESSION['success']['simpan_k'])) {
                echo '<div class="alert alert-success mt-3">' . $_SESSION['success']['simpan_k'] . '</div>';
            }
            unset($_SESSION['success']['simpan_k']);
            ?>
        </form>
        <div class="col-md-8 offset-md-2 mt-4">
            <h3>Daftar Kategori</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th colspan="2">aksi</th>
                    </tr>
                </thead>
                <tbody>
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
                                <td><a href='?main=kategori&hapus=$row[id_kategori]' class='btn btn-danger'>hapus</a></td>
                                <td>ubah</td>
                            </tr>";
                            $no++;
                        }
                        if (isset($_GET['hapus'])) {
                            $id_kategori = $_GET['hapus'];
                            $delete_query = "DELETE FROM `kategori` WHERE `kategori`.`id_kategori` = '$id_kategori'";
                        }
                    } else {
                        print "<tr><td colspan='3' class='text-center'>Tidak ada kategori.</td></tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>