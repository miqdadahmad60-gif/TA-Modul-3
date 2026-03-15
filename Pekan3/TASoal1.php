```html
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

.auth-box{
max-width:400px;
margin:100px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input{
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

.page{
display:none;
}

.active{
display:block;
}

</style>
</head>

<body>

<header>
<div class="logo">Smart School Kupang</div>
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

<p style="font-size:12px">
Belum punya akun?
<a href="#" onclick="showPage('registerPage')">Daftar disini</a>
</p>

</div>

</div>


<!-- REGISTER -->
<div id="registerPage" class="page">

<div class="auth-box">

<h3>Registrasi Akun</h3>

<input type="text" id="regNama" placeholder="Nama Lengkap">
<input type="text" id="regEmail" placeholder="Email">
<input type="password" id="regPass" placeholder="Password">

<button onclick="register()">Daftar</button>

<p style="font-size:12px">
Sudah punya akun?
<a href="#" onclick="showPage('loginPage')">Login disini</a>
</p>

</div>

</div>


<script>

function showPage(page){

document.querySelectorAll(".page").forEach(p=>p.classList.remove("active"))

document.getElementById(page).classList.add("active")

}


function login(){

let email=document.getElementById("email").value
let pass=document.getElementById("pass").value

let users=JSON.parse(localStorage.getItem("users")) || []

let akun=users.find(u=>u.email===email && u.pass===pass)

if(email==="guru@smart.com" && pass==="123" || akun){

localStorage.setItem("login","true")

window.location="dashboard.html"

}else{

alert("Login gagal")

}

}


function register(){

let nama=document.getElementById("regNama").value
let email=document.getElementById("regEmail").value
let pass=document.getElementById("regPass").value

if(!nama || !email || !pass){

alert("Isi semua data")
return

}

let users=JSON.parse(localStorage.getItem("users")) || []

users.push({
nama:nama,
email:email,
pass:pass
})

localStorage.setItem("users",JSON.stringify(users))

alert("Registrasi berhasil")

showPage("loginPage")

}

</script>

</body>
</html>
```
