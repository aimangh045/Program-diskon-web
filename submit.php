<h1>Hasil</h1>
    <?php
        $nomor_transaksi = $_POST['nomor_transaksi'];
        $nama_pembeli = $_POST['nama_pembeli'];
        $jumlah_buku = $_POST['jumlah_buku'];
        $harga_buku = $_POST['harga_buku'];

        $diskon_belanja = 0.1 * $harga_buku;
        $diskon_transaksi = 0.05 * $harga_buku;

        $total_harga = ($harga_buku - $diskon_belanja) * $jumlah_buku - $diskon_transaksi;

        echo "<p>Nomor Transaksi: " . $nomor_transaksi . "</p>";
        echo "<p>Nama Pembeli: " . $nama_pembeli . "</p>";
        echo "<p>Jumlah Buku: " . $jumlah_buku . "</p>";
        echo "<p>Harga Buku: Rp. " . $harga_buku . "</p>";
        echo "<p>Diskon Belanja (10%): Rp. " . $diskon_belanja . "</p>";
        echo "<p>Diskon Transaksi (5%): Rp. " . $diskon_transaksi . "</p>";
        echo "<p>Total Bayar: Rp. " . $total_harga . "</p>";

        echo '<a href="submitdiskon.php">Kembali</a>';
    ?>
   