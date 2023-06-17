<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel & Function PHP</title>
</head>
<body>
    <?php 
        // echo "Heru";
        // $kampus = "Universitas Muhammadiyah Sumatera Utara";
        // $prodi = "Teknik Informasi";
    ?>
    <!-- <p>
        Saya adalah mahasiswa <?//= $kampus; ?>, program STUDI <?//= $prodi; ?>
    </p> -->

    <!-- 
        Buatlah variabel yang menampung angka hari, lalu kemudian
        ketika ditampilkan adalah nama hari nya
     -->

     <?php 

    function hari($number_hari){
        if ($number_hari == 1) {
            $hari = "Senin";
        }elseif ($number_hari == 2) {
            $hari = "Selasa";
        }elseif ($number_hari == 3) {
            $hari = "Rabu";
        }elseif ($number_hari == 4) {
            $hari = "Kamis";
        }elseif ($number_hari == 5) {
            $hari = "Jumat";
        }elseif ($number_hari == 6) {
            $hari = "Sabtu";
        }elseif ($number_hari == 7) {
            $hari = "Minggu";
        }else {
            $hari = "Tidak ditemukan!";
        }
        return $hari;
    }

     
     ?>

    <?php if (@$_POST["hari"]) { ?>
        <h1>Hari ini adalah hari <i style="color: crimson"><?= hari(@$_POST["hari"]); ?></i></h1>
    <?php } ?>

     <hr>

     <form action="" method="post">
        <input type="number" name="hari" placeholder="Input hari">
        <button>Cari</button>
     </form>

</body>
</html>