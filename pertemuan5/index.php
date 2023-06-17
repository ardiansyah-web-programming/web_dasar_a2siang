<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <?php
    $liga_inggris = array(
        array("Manchester City","89","Winner"),
        array("Arsenal","81","Runner-up"),
        array("Manchester United","72","Champions"),
        array("Newcastle United","70","Playof Champions")
    );
    $jumlah_liga_inggris = count($liga_inggris);
    // var_dump($liga_inggris);
    // echo $liga_inggris[3][2];
    ?>
    <table border="1" style="border-collapse: collapse; text-align: center">
        <tr>
            <th>No</th>
            <th>Nama Club</th>
            <th>Point</th>
            <th>Status</th>
        </tr>
        <?php for ($i=0; $i < $jumlah_liga_inggris; $i++) { 
        $isi_liga_inggris = count($liga_inggris[$i]);
        ?>
        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for ($x=0; $x < $isi_liga_inggris; $x++) { ?>
            <td><?php echo $liga_inggris[$i][$x]; ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>