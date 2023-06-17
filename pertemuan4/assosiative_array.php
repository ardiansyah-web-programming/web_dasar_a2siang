<?php
//Contoh 1
$umur = array("Anhar" => "17", "Budi" => "21", "Lampard" => "37");

echo "Umur si Anhar sekarang adalah " . $umur["Anhar"] . "<br>";
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
    </tr>
    <?php 
    $no = 1;
    foreach($umur as $u => $u_value) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $u ?></td>
        <td><?= $u_value ?></td>
    </tr>
    <?php endforeach; ?>
</table>