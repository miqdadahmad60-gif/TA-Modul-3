<?php
session_start();

if(!isset($_SESSION['materi'])){
    $_SESSION['materi'] = [];
}

if(isset($_POST['login'])){
    if($_POST['username']=="admin" && $_POST['password']=="123"){
        $_SESSION['login'] = true;
    } else {
        $error = "Login gagal";
    }
}

if(isset($_POST['tambah'])){
    $judul = $_POST['judul'];
    $mapel = $_POST['mapel'];

    $_SESSION['materi'][] = [
        "judul"=>$judul,
        "mapel"=>$mapel
    ];
}

if(isset($_GET['logout'])){
    session_destroy();
    header("Location: smartschool.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Smart School Kupang</title>
</head>
<body>

<?php if(!isset($_SESSION['login'])){ ?>

<h2>Login Smart School Kupang</h2>

<?php if(isset($error)) echo $error; ?>

<form method="POST">
Username <br>
<input type="text" name="username"><br><br>

Password <br>
<input type="password" name="password"><br><br>

<button name="login">Login</button>
</form>

<?php } else { ?>

<h2>Dashboard Smart School Kupang</h2>

<a href="?logout=true">Logout</a>

<h3>Tambah Materi (Create)</h3>

<form method="POST">
Judul Materi <br>
<input type="text" name="judul"><br><br>

Mata Pelajaran <br>
<input type="text" name="mapel"><br><br>

<button name="tambah">Tambah</button>
</form>

<h3>Daftar Materi (Read)</h3>

<table border="1">
<tr>
<th>No</th>
<th>Judul</th>
<th>Mapel</th>
</tr>

<?php
$no=1;
foreach($_SESSION['materi'] as $m){
echo "<tr>
<td>".$no++."</td>
<td>".$m['judul']."</td>
<td>".$m['mapel']."</td>
</tr>";
}
?>

</table>

<?php } ?>

</body>
</html>