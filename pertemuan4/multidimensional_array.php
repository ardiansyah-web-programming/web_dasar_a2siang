<?php
$mobil = array(
    array(
        array("BMW1","Merah1","Rp 1.000.001"),
        array("Toyota1","Hijau1","Rp 500.001"),
        array("Mitsubishi1","Abu-abu1","Rp 1.500.001")
    ),
    array(
    array("BMW","Merah","Rp 1.000.000"),
    array("Toyota","Hijau","Rp 500.000"),
    array("Mitsubishi","Abu-abu","Rp 1.500.000")
)
);
// echo var_dump($mobil) . "<br><br>";
// echo $mobil[0][2][0];

$mobil = array(
            array("BMW","Merah","Rp 1.000.000"),
            array("Toyota","Hijau","Rp 500.000"),
            array("Mitsubishi","Abu-abu","Rp 1.500.000")
);
        // echo $mobil[0][0];
        // echo $mobil[0][0];
        // echo $mobil[1][0];
        // echo $mobil[2][0];
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
        <th>Warna</th>
        <th>Harga</th>
    </tr>
    <?php
        for ($i=0; $i < 3; $i++) { ?>
        <tr>
            <td><?= $i+1 ?></td>
            <?php 
            for ($x=0; $x < 3; $x++) { ?> 
                <td><?= $mobil[$i][$x] ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>

<!-- <ul> -->
    <?php
    // for ($i=0; $i < 3; $i++) {
    //     for ($x=0; $x < 3; $x++) { 
    //         echo "<li>". $mobil[$i][$x] ."</li>";
    //     }
    // }
    ?>
<!-- </ul> -->

