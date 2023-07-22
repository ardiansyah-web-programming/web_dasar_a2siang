<?php
require "functions.php";
$id = $_GET["id"];
if (prodi_satu_jumlah($id) < 1) {
  echo "
  <script>
  alert('ID yang dipilih tidak ditemukan!');
  location='prodi.php';
  </script>
  ";
}
session_start();
if (@$_SESSION["login"] == false and @$_SESSION["username"] == "") {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Studi</title>
</head>

<body>
  <h1>Halaman Edit Prodi</h1>
  <table>
    <form action="" method="POST">
      <tr>
        <th>Nama Prodi</th>
        <td>:</td>
        <td>
          <input type="text" name="nama_prodi" placeholder="Input Nama Prodi" value="<?php echo prodi_satu($id, "nama_prodi"); ?>">
        </td>
        <td>
          <button type="submit" name="edit_prodi">Edit Prodi</button>
        </td>
      </tr>
    </form>
  </table>

  <?php
  if (isset($_POST["edit_prodi"])) {
    $nama_prodi = $_POST["nama_prodi"];
    $tanggal = date("Y-m-d H:i:s");
    if ($nama_prodi == "") {
      echo "<script>
      alert('Nama prodi tidak boleh kosong!');
      </script>";
    } else {
      $edit = q("UPDATE prodi_umsu SET
      nama_prodi = '$nama_prodi',
      edit = '$tanggal'
      WHERE
      id = '$id'");
      if ($edit) {
        echo "<script>
        alert('Edit Berhasil!');
        location='prodi.php';
        </script>";
      } else {
        echo "<script>
        alert('Edit Gagal, Nama Prodi sudah ada sebelumnya!');
        </script>";
      }
    }
  }
  ?>

</body>

</html>