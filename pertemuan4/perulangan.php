<?php
$mobil = array("Xenia","Alphard","BMW");
$jumlah_mobil = count($mobil);
?>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
    </tr>
    <?php for ($i=0; $i < $jumlah_mobil; $i++) { ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $mobil[$i] ?></td>
        </tr>
    <?php } ?>
</table>
