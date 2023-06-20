<?php
require "functions.php";
$tanggal_hari_ini = date("Y-m-d H:i:s");

if (isset($_POST["simpan_prodi"])) {
  $nama_prodi = @$_POST["nama_prodi"];
  if ($nama_prodi == "") {
    echo "Nama Prodi masih kosong!";
  } else {
    $t = q("INSERT INTO prodi_umsu VALUES(null,'$nama_prodi','$tanggal_hari_ini','$tanggal_hari_ini')");
    if ($t) {
      echo "
      <script>
      alert('Data berhasil ditambahkan!');
      location='prodi.php';
      </script>";
    } else {
      echo "Nama Prodi sudah ada sebelumnya!";
    }
  }
}
