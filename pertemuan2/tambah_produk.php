<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Form Tambah Produk</h1>
    <!-- <a href="index.html">Kembali ke halaman produk</a> -->
    <a href="../pertemuan2/">Kembali ke halaman produk</a>
    <br><br>
    <form action="" method="post">
        <label>Kode Produk</label>
        <input type="text" name="kode_produk" id="">
        <button>Simpan</button>
    </form>
    <?php echo @$_POST["kode_produk"]; ?>
    <?//php echo $_GET["kode_produk"]; ?>
</body>
</html>