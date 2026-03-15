<!DOCTYPE html>
<html>
<head>
<title>Login Smart School Kupang</title>
</head>
<body>

<h2>Login Smart School Kupang</h2>

<form method="POST">
    Username : <br>
    <input type="text" name="username" required><br><br>

    Password : <br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // simulasi data user (belum database)
    $user_benar = "admin";
    $pass_benar = "12345";

    if($username == $user_benar && $password == $pass_benar){
        echo "<p>Login berhasil! Selamat datang di Smart School Kupang.</p>";
    } else {
        echo "<p>Username atau password salah.</p>";
    }
}
?>
<title>Registrasi Smart School Kupang</title>
</head>
<body>

<h2>Registrasi Pengguna</h2>

<form method="POST">

    Nama Lengkap : <br>
    <input type="text" name="nama" required><br><br>

    Username : <br>
    <input type="text" name="username" required><br><br>

    Password : <br>
    <input type="password" name="password" required><br><br>

    Role : <br>
    <select name="role">
        <option value="siswa">Siswa</option>
        <option value="guru">Guru</option>
        <option value="orangtua">Orang Tua</option>
    </select>
    <br><br>

    <button type="submit" name="register">Daftar</button>

</form>

<?php

if(isset($_POST['register'])){

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    echo "<h3>Registrasi Berhasil</h3>";
    echo "Nama : $nama <br>";
    echo "Username : $username <br>";
    echo "Role : $role <br>";
    echo "Akun berhasil dibuat (simulasi tanpa database)";
}

?>

</body>
</html>
