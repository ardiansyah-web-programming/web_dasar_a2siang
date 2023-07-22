<?php
session_start();
if (@$_SESSION["login"] == false and @$_SESSION["username"] == "") {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Akademik</title>
</head>

<body>
    <h1>Halaman Beranda</h1>
    <a href="prodi.php">Halaman Prodi</a><br>
    <a href="mahasiswa.php">Halaman Mahasiswa</a>

    <hr>
    <a href="javascript:logout('logout.php')">
        <button>Logout</button>
    </a>

    <script>
        function logout(url) {
            if (confirm("Apakah anda akan Logout?")) {
                location = url
            }
        }
    </script>

</body>

</html>