<div class="main-content">
    <div class="row">
        <form action="proses_input_b.php" method="post" class="col-md-8 offset-md-2">
            <div class="form-group">
            <label for="kode">Kode / ISBN:</label>
            <input type="text" class="form-control" id="kode" name="kode" required>
            </div>
            <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <select class="form-control" id="penerbit" name="penerbit" required>
                <option value="">-- Pilih Penerbit --</option>
                <option value="Gramedia">Gramedia</option>
                <option value="Erlangga">Erlangga</option>
                <option value="Mizan">Mizan</option>
                <option value="Andi">Andi</option>
                <option value="Bentang">Bentang</option>
                <option value="Deepublish">Deepublish</option>
                <option value="Gadjah Mada University Press">Gadjah Mada University Press</option>
            </select>
            </div>
            <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" class="form-control" id="penulis" name="penulis" required>
            </div>
            <div class="form-group">
            <label for="tahun">Tahun Terbit (Tahun):</label>
            <input type="text" class="form-control" id="tahun" name="tahun" required>
            </div>
            <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="text" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Fiksi">Fiksi</option>
                <option value="Non-Fiksi">Non-Fiksi</option>
                <option value="Komik">Komik</option>
                <option value="Ensiklopedia">Ensiklopedia</option>
                <option value="Biografi">Biografi</option>
                <option value="Teknologi">Teknologi</option>
                <option value="Sains">Sains</option>
                <option value="Sejarah">Sejarah</option>
            </select>
            </div>
            <div class="form-group">
            <label for="sinopsis">Sinopsis:</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2 mb-4">Simpan</button>
        </form>
    </div>
</div>