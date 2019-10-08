<?php
require_once "../koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM wishlist");
?>
<html>
<head>
<title>Laporan Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="../foto/tc.png">
</head>
<body>
<header>
<div class="topnav" id="myTopnav">

<span><img width=100px src=../foto/tc.png></span>
  <h3><img src=../foto/tc.png></h3>
  <a  style="visibility:hidden;">aassa</a>
  <a href=index.php>Laporan Bulanan</a>
  <a href=form_upload.php>Buat Travel</a>
  <div class="dropdown">
  <button class="dropbtn">
      <i class="fa fa-user"></i>
    </button>

    <div class="dropdown-content">
      <a href="bulanan.php">Laporan Bulanan</a>
      <a href="login.php">Log-In User</a>
      <a href="daftartravel.php">Daftar Travel</a>
      <a href="loginperusahaan.php">Log-In Travel</a>
    </div>
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</header>

<center>
<div class=konten style="margin-top:10px;">
<table border=2 width=1000px >
<tr>
<td align=center width=10px>
No
</td>
<td>
Nomor Pemesanan
</td>
<td>
Nama
</td>
<td>
Email
</td>
<td>
No.Telp
</td>
</tr>
<?php

$no=0;
while($row = mysqli_fetch_array($result)) {
  $no++;
?>
<tr>
<td align=center><?php echo $no ?></td>
<td><?php echo $row["nomor"]; ?></td>
<td><?php echo $row["nama"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["telp"]; ?></td>
</tr>
<?php
}
?>
</table>

</div>
</center>

<footer>
<div class="bawah">
<strong>Copyright &copy; 2019 MR-MichaelRio</a>.</strong> All rights reserved.
</div>     
</footer>
</body>
</html>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<style>
    * {box-sizing: border-box;}
body{
font-family: Arial, Helvetica, sans-serif;
margin:0;
}
.topnav {
  overflow: hidden;
  background-color: #002141;
  z-index:1;
}
.topnav span{
  width:100px;
  float:left;
  margin-left:10px;  
}
.topnav h3{
  display:none;visibility:hidden;
}

.button{
  display:none;visibility:hidden;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;

  text-decoration: none;
  font-size: 17px;
}


.topnav .icon {
  display: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 6;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.gambar{
    width:100px;
    float:left;
}
.bawah{
    text-align:center;
  width: 100%;
height: 50px;
padding-left: 10px;
line-height: 50px;
background: #333;
color: #fff;
position: fixed;
bottom: 0px;
}
@media screen and (max-width: 650px) {
  
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 650px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .header img{
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  .header-right {
    float: none;
  }

  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
@media screen and (max-width: 650px) {
  .bawah{
    width: 100%;
    height: 50px;
    font-size:12px;
    padding-left: 10px;
    line-height: 50px;
    background: #333;
    color: #fff;
    position: fixed;
    bottom: 0px;
    }
    }
    @media screen and (max-width: 400px) {
      .bawah{
        width: 100%;
        height: 50px;
        font-size:10px;
        padding-left: 12px;
        line-height: 50px;
        background: #333;
        color: #fff;
        position: fixed;
        bottom: 0px;
        }
        }
</style>
