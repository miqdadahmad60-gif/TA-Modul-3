```php
<!DOCTYPE html>
<html>
<head>
<title>Smart School Kupang</title>

<style>

body{
font-family:Arial, Helvetica, sans-serif;
background:#f5f7fa;
margin:0;
}

header{
background:#00bcd4;
color:white;
padding:15px;
text-align:center;
font-size:22px;
font-weight:bold;
}

.container{
display:flex;
justify-content:center;
gap:40px;
padding:40px;
flex-wrap:wrap;
}

.card{
background:white;
padding:30px;
width:350px;
border-radius:10px;
box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.card h2{
text-align:center;
margin-bottom:20px;
}

input, select{
width:100%;
padding:10px;
margin-top:5px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#ff9800;
border:none;
color:white;
font-weight:bold;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#e68900;
}

.message{
margin-top:15px;
padding:10px;
background:#e8f5e9;
border-radius:5px;
}

.error{
background:#ffebee;
}

</style>
</head>

<body>

<header>
Smart School Kupang
</header>

<div class="container">

<!-- LOGIN -->
<div class="card">

<h2>Login</h2>

<form method="POST">

Username :
<input type="text" name="username" required>

Password :
<input type="password" name="password" required>

<button type="submit" name="login">Login</button>

</form>

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_benar = "admin";
    $pass_benar = "12345";

    if($username == $user_benar && $password == $pass_benar){
        echo "<div class='message'>Login berhasil! Selamat datang di Smart School Kupang.</div>";
    } else {
        echo "<div class='message error'>Username atau password salah.</div>";
    }
}

?>

</div>


<!-- REGISTER -->
<div class="card">

<h2>Registrasi</h2>

<form method="POST">

Nama Lengkap :
<input type="text" name="nama" required>

Username :
<input type="text" name="username" required>

Password :
<input type="password" name="password" required>

Role :
<select name="role">
<option value="siswa">Siswa</option>
<option value="guru">Guru</option>
<option value="orangtua">Orang Tua</option>
</select>

<button type="submit" name="register">Daftar</button>

</form>

<?php

if(isset($_POST['register'])){

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    echo "<div class='message'>";
    echo "<b>Registrasi Berhasil</b><br>";
    echo "Nama : $nama <br>";
    echo "Username : $username <br>";
    echo "Role : $role <br>";
    echo "Akun berhasil dibuat (simulasi tanpa database)";
    echo "</div>";
}

?>

</div>

</div>

</body>
</html>
```
