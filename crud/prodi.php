<?php
require "functions.php";
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
    <h1>Halaman Prodi</h1>
    <form action="" method="post">
        <table>
            <tr>
                <th>Nama Program Studi</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama_prodi" id="">
                </td>
                <td><button type="submit" name="simpan_prodi" value="klik">Simpan</button></td>
            </tr>
        </table>
    </form>
    <table style="border-collapse: collapse;" border="1">
        <tr>
            <th>ID</th>
            <th>Nama Prodi</th>
        </tr>
        <?php 
        foreach(prodi() as $p) : ?>
        <tr>
            <td><?php echo $p["id"] ?></td>
            <td><?php echo $p["nama_prodi"] ?></td>
        </tr>
        <?php endforeach;
        ?>
    </table>
    <?php
    if (@$_POST["simpan_prodi"] == "klik") {
        $nama_prodi = @$_POST["nama_prodi"];
        if ($nama_prodi == "") {
            echo "Nama Prodi masih kosong!";
        }else {
            $t = q("INSERT INTO prodi VALUES(null,'$nama_prodi')");
            if ($t) {
                echo "Data berhasil ditambahkan!";
            }else {
                echo "Nama Prodi sudah ada sebelumnya!";
            }
        }
    }
    ?>
</body>
</html>