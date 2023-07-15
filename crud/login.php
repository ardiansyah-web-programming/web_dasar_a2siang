<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <h1 class="tengah">Halaman Login</h1>
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
        <p class="tengah">Anda belum punya akun? Registrasi akun <a href="registrasi.php">disini</a></p>
</body>
</html>