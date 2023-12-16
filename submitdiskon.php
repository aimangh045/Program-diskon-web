<!DOCTYPE html>
<html>
<head>
    <title>Beli Buku Gaes</title>

</head>
<body>
    <h1>Masukkan Transaksi</h1>
    <form action="submit.php" method="post">
        <label for="nomor_transaksi">Nomor Transaksi:</label>
        <input type="number" id="nomor_transaksi" name="nomor_transaksi" min="1" placeholder="Masukkan nomor transaksi..." required><br>

        <label for="nama_pembeli">Nama Pembeli:</label>
        <input type="text" id="nama_pembeli" name="nama_pembeli" placeholder="Masukkan nama pembeli..." required><br>

        <label for="judul_buku">Judul Buku:</label>
        <input type="text" id="judul_buku" name="judul_buku" placeholder="Judul buku..."required><br>

        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="number" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah..."required><br>

        <label for="harga_buku">Harga Buku:</label>
        <input type="number" id="harga_buku" name="harga_buku" placeholder="Harga buku..."required><br>

        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>