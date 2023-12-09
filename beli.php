

<!-- <h1>Masukkan data diri anda</h1>
    <div class="row my-4 mx-auto row-cols-sm-2 row-cols-2">
        <form method="POST" action="simpan.php">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" maxlength="12" required id="alamat">
        </div>

        <div class="form-group">
            <label for="metode">Metode</label>
            <input type="checkbox" required id="metode" value="">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Check Out</button>
        </form>
    </div> -->

    <div class="container mt-4">
    <div class="row row-cols-sm-4">
        <?php
        // Daftar barang
        $barang = array(
            "joran1", "joran2", "joran3", "joran4", "joran5",
            "joran6", "joran7", "joran8", "Barang 9", "Barang 10",
            "Barang 11", "Barang 12", "Barang 13", "Barang 14", "Barang 15",
            "Barang 16", "Barang 17", "Barang 18", "Barang 19", "Barang 20",
            "Barang 21", "Barang 22", "Barang 23", "Barang 24", "Barang 25",
            "Barang 26", "Barang 27", "Barang 28", "Barang 29", "Barang 30",
            "Barang 31", "Barang 32"
        );

        // Loop untuk menampilkan daftar barang
        foreach ($barang as $item) {
            echo '<div class="col-md-4 mb-4 row-cols-sm-4">';
            echo '<div class="card">';
            echo '<img src="foto/'.$item.'.jpg" class="card-img-top" alt="'.$item.'">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$item.'</h5>';
            echo '<p class="card-text">Deskripsi '.$item.'</p>';
            echo '<a href="#" class="btn btn-primary">Beli</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>