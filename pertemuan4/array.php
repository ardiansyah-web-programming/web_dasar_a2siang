<?php
$mobil = array("Xenia","Alphard","BMW");
//var_dump($mobil);
//Menampikan Array berdasarkan nilai array nya
//echo $mobil[0];

//Menghitung jumlah Array
// echo count($mobil);
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?= $mobil[0] ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?= $mobil[1] ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td><?= $mobil[2] ?></td>
    </tr>
</table>

<p>Saya suka mobil <?= $mobil[0] ?> dan saya suka mobil <?= $mobil[1] ?>, tetapi saya tidak suka mobil <?= $mobil[2] ?></p>

