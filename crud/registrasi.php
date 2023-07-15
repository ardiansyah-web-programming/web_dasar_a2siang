<?php require "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitrasi</title>
    <style>
        .halaman-login{
            display: flex;
            align-items: center;
            height: 100%;
            justify-content: center;
            flex: 1 0 100%;
        }
        .tengah{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="tengah">Halaman Registrasi</h1>
    <form action="" method="post">
    <table class="halaman-login">
        <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="text" name="username" value="<?= @$_POST["username"] ?>">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>:</td>
            <td>
                <input type="email" name="email" value="<?= @$_POST["email"] ?>">
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw1" value="<?= @$_POST["pw1"] ?>">
            </td>
        </tr>
        <tr>
            <th>Confirm Password</th>
            <td>:</td>
            <td>
                <input type="password" name="pw2" value="<?= @$_POST["pw2"] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button name="registrasi" type="submit" style="width:100%">Registrasi</button>
            </td>
        </tr>
    </table>
    </form>
        <p class="tengah">Sudah punya akun? Login <a href="login.php">disini</a></p>

<?php
if (isset($_POST["registrasi"])) {
    $username = htmlspecialchars(strtolower($_POST["username"]));
    $email = htmlspecialchars($_POST["email"]);
    $pw1 = htmlspecialchars($_POST["pw1"]);
    $pw2 = htmlspecialchars($_POST["pw2"]);

    if ($username == "" || $email == "" || $pw1 == "" || $pw2 == "") {
        echo "<script>
        alert('Data masih ada yang kosong!');
        </script>";
    }elseif ($pw1 != $pw2) {
        echo "<script>
        alert('Confirm password tidak sesuai!')
        </script>";
    }else {
        $encrypt_pw = password_hash($pw1,PASSWORD_DEFAULT);
        // echo $encrypt_pw;
        
        $tgl = date("Y-m-d H:i:s");

        $simpan_registrasi = q("INSERT INTO user VALUES(null,
        '$username',
        '$email',
        '$encrypt_pw',
        '$tgl','$tgl','')");

        if ($simpan_registrasi) {
            echo "<script>
            alert('Registrasi anda berhasil!')
            location='login.php'
            </script>";
        }else {
            echo "<script>
            alert('Username yang ada input sudah ada sebelumnya!')
            </script>";
        }

    }

}
?>

</body>
</html>