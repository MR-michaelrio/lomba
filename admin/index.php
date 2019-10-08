<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/wow.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="img/tc.png">
</head>
<body>

<div class="topnav" id="myTopnav">
<span><img width=100px src=foto/tc.png></span>
  <h3><img src=foto/tc.png></h3>
  <a  style="visibility:hidden;">aassa</a>
  <a href=admin/index2.php>Booking</a>
  <div class="dropdown">
  <button class="dropbtn">
      <i class="fa fa-user">
      </i>
    </button>
    <div class="dropdown-content">
    <a href="daftar.php">Daftar</a>
      <a href="login.php">Log-In User</a>
      <a href="daftartravel.php">Daftar Travel</a>
      <a href="loginperusahaan.php">Log-In Travel</a>
    </div>
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<Center>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="foto/5.png" class=gambar >
</div>

<div class="mySlides fade">
  <img src="foto/6.png" class=gambar>
</div>

<div class="mySlides fade">
  <img src="foto/7.png" class=gambar>
</div>

</div>
</div>
</center>
<center>
<div class="konten" >
  <table class=wow border=0 width=350px >  
<tr>
<td rowspan=5 align=center width=200px><img class=gambar1 width=100% src=../foto/antavaya.png></td>
</tr>
<tr>
<td>Jepang</td>
</tr>
<tr>
<td>3 Day 2 night</td>    
</tr>
<tr>
<td style="color:green;">Hokaido-Tokyo</td>    
</tr>
<tr>
<td>Jakarta</td>    
</tr>
</table>
</div>
<div class="konten" >
  <table class=wow border=0 width=350px >  
<tr>
<td rowspan=5 align=center width=200px><img class=gambar1 width=100% src=../foto/antavaya.png></td>
</tr>
<tr>
<td>Jepang</td>
</tr>
<tr>
<td>3 Day 2 night</td>    
</tr>
<tr>
<td style="color:green;">Hokaido-Tokyo</td>    
</tr>
<tr>
<td>Jakarta</td>    
</tr>
</table>
</div>
<div class="konten" >
  <table class=wow border=0 width=350px >  
<tr>
<td rowspan=5 align=center width=200px><img class=gambar1 width=100% src=../foto/antavaya.png></td>
</tr>
<tr>
<td>Jepang</td>
</tr>
<tr>
<td>3 Day 2 night</td>    
</tr>
<tr>
<td style="color:green;">Hokaido-Tokyo</td>    
</tr>
<tr>
<td>Jakarta</td>    
</tr>
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
<script src=js/imageslider.js></script>
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

  .konten{
    margin-top:10px;
				width:350px;
				background:#ead2ac;
				display: inline-block;
        margin-left: 10px;
        border-radius:5px;
      }
      .wow{
        font-size:20px;
      }
  .bawah{
    margin-top:10px;
  width: 100%;
height: 50px;
padding-left: 10px;
line-height: 50px;
background: #333;
color: #fff;
position: relative;
bottom: 0px;
text-align:center;
}
  </style>