<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Smart School Kupang</title>

<style>

body{
font-family:Arial;
margin:0;
background:#f8f9fa;
}

header{
background:white;
padding:15px 30px;
border-bottom:1px solid #eee;
display:flex;
justify-content:space-between;
}

.logo{
font-size:20px;
font-weight:bold;
color:#00bcd4;
}

.container{
width:90%;
max-width:900px;
margin:auto;
padding:40px 0;
}

.auth-box{
max-width:400px;
margin:100px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input,textarea{
width:100%;
padding:10px;
margin:8px 0;
}

button{
padding:10px;
background:#ff9800;
color:white;
border:none;
cursor:pointer;
}

.logout{
background:#e74c3c;
}

.page{
display:none;
}

.active{
display:block;
}

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

th,td{
border:1px solid #ddd;
padding:8px;
}

th{
background:#00bcd4;
color:white;
}

</style>
</head>

<body>

<header>
<div class="logo">Smart School Kupang</div>
<div id="userArea"></div>
</header>


<!-- LOGIN -->
<div id="loginPage" class="page active">

<div class="auth-box">

<h3>Login Guru</h3>

<input type="text" id="email" placeholder="Email">
<input type="password" id="pass" placeholder="Password">

<button onclick="login()">Login</button>

<p style="font-size:12px">
akun demo : guru@smart.com / 123
</p>

</div>

</div>


<!-- DASHBOARD -->
<div id="dashboardPage" class="page">

<div class="container">

<h2>Dashboard Guru</h2>

<h3>Buat Materi (Create)</h3>

<input type="text" id="judulMateri" placeholder="Judul Materi">

<textarea id="deskripsiMateri" placeholder="Deskripsi Materi"></textarea>

<button onclick="createMateri()">Simpan Materi</button>


<h3 style="margin-top:40px">Daftar Materi (Read)</h3>

<table>

<thead>
<tr>
<th>Judul</th>
<th>Deskripsi</th>
</tr>
</thead>

<tbody id="tabelMateri"></tbody>

</table>

</div>

</div>


<script>

let userLogin=null


function showPage(page){

document.querySelectorAll(".page").forEach(p=>p.classList.remove("active"))

document.getElementById(page).classList.add("active")

}



function login(){

let email=document.getElementById("email").value
let pass=document.getElementById("pass").value

if(email==="guru@smart.com" && pass==="123"){

userLogin={nama:"Guru Demo"}

document.getElementById("userArea").innerHTML=
'Halo <b>'+userLogin.nama+'</b> <button class="logout" onclick="logout()">Logout</button>'

showPage("dashboardPage")

readMateri()

}else{

alert("Login gagal")

}

}



function logout(){

userLogin=null

document.getElementById("userArea").innerHTML=""

showPage("loginPage")

}



function createMateri(){

let judul=document.getElementById("judulMateri").value
let deskripsi=document.getElementById("deskripsiMateri").value

if(!judul || !deskripsi){

alert("Isi semua data")

return

}

let db=JSON.parse(localStorage.getItem("materi")) || []

db.push({
judul:judul,
deskripsi:deskripsi
})

localStorage.setItem("materi",JSON.stringify(db))

alert("Materi berhasil ditambahkan")

document.getElementById("judulMateri").value=""
document.getElementById("deskripsiMateri").value=""

readMateri()

}



function readMateri(){

let db=JSON.parse(localStorage.getItem("materi")) || []

let tabel=document.getElementById("tabelMateri")

tabel.innerHTML=""

db.forEach(m=>{

tabel.innerHTML+=`
<tr>
<td>${m.judul}</td>
<td>${m.deskripsi}</td>
</tr>
`

})

}

</script>

</body>
</html>
