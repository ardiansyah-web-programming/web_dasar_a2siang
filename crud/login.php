<?php require "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .halaman-login {
            display: flex;
            align-items: center;
            height: 100%;
            justify-content: center;
            flex: 1 0 100%;
        }

        .tengah {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="tengah">Halaman Login</h1>
    <form action="" method="post">
        <table class="halaman-login">
            <tr>
                <th>Username</th>
                <td>:</td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td>:</td>
                <td>
                    <input type="password" name="pw">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button name="login" type="submit" style="width:100%">Login</button>
                </td>
            </tr>
        </table>
    </form>
    <p class="tengah">Anda belum punya akun? Registrasi akun <a href="registrasi.php">disini</a></p>

    <?php
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $pw = $_POST["pw"];
        if (user_username_jumlah($username) > 0) {
            if (password_verify($pw, user_satu($username, "password"))) {
                echo "<script>
                alert('Login anda berhasil!')
                location='../crud/'
                </script>";
                session_start();
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;
            } else {
                echo "<script>
                alert('Password tidak sesuai!')
                </script>";
            }
        } else {
            echo "<script>
            alert('Username tidak ditemukan!')
            </script>";
        }
    }
    ?>

</body>

</html>