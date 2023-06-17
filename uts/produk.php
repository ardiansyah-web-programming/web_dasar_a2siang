<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS</title>
</head>

<body>
  <h1>Halaman Produk</h1>
  <ul>
    <a href="index.php">
      <li>Beranda</li>
    </a>
    <a href="pembelian.php">
      <li>Menu Pembelian</li>
    </a>
  </ul>

  <?php
  $produk = array(
    array("Sepatu Nike", "Rp 1.000.000", "5 PCS"),
    array("Acer Predator", "Rp 20.000.000", "2 PCS"),
    array("Asus ROG", "Rp 30.000.000", "5 PCS")
  );
  $jumlah_produk = count($produk);
  ?>
  <table border="1" style="border-collapse: collapse; text-align: center">
    <tr>
      <th>No</th>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Stok</th>
    </tr>
    <?php for ($i = 0; $i < $jumlah_produk; $i++) {
      $isi_produk = count($produk[$i]);
    ?>
      <tr>
        <td><?php echo $i + 1; ?></td>
        <?php for ($x = 0; $x < $isi_produk; $x++) { ?>
          <td><?php echo $produk[$i][$x]; ?></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

</body>

</html>