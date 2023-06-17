<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS</title>
</head>

<body>
  <h1>Halaman Pembelian</h1>
  <ul>
    <a href="index.php">
      <li>Beranda</li>
    </a>
    <a href="produk.php">
      <li>Menu Produk</li>
    </a>
  </ul>
  <hr>
  <table>
    <form action="" method="POST">
      <tr>
        <th>Nama Produk</th>
        <td>:</td>
        <td>
          <input type="text" name="nama_produk">
        </td>
      </tr>
      <tr>
        <th>Harga Produk</th>
        <td>:</td>
        <td>
          <input type="number" name="harga_produk">
        </td>
      </tr>
      <tr>
        <th>Qty</th>
        <td>:</td>
        <td>
          <input type="number" name="qty">
        </td>
      </tr>
      <tr>
        <th>Jumlah Bayar</th>
        <td>:</td>
        <td>
          <input type="number" name="jumlah_bayar">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button name="bayar" style="width: 100%;" type="submit">Bayar</button>
        </td>
      </tr>
    </form>
  </table>

  <?php
  if (isset($_POST["bayar"])) {
    $nama_produk = $_POST["nama_produk"];
    $harga_produk = $_POST["harga_produk"];
    $qty = $_POST["qty"];
    $jumlah_bayar = $_POST["jumlah_bayar"];

    $total_bayar = $harga_produk * $qty;
    $sisa_kembalian = $jumlah_bayar - $total_bayar;

    echo "Nama Produk : " . $nama_produk . "<br>";
    echo "Harga Produk : " . $harga_produk . "<br>";
    echo "Qty Produk : " . $qty . "<br>";
    echo "Total Bayar : " . $total_bayar . "<br>";
    echo "Jumlah Pembayaran : " . $jumlah_bayar . "<br>";
    echo "Total Kembalian : " . $sisa_kembalian . "<br>";
  }
  ?>

  <script src="javascript.js"></script>

</body>

</html>