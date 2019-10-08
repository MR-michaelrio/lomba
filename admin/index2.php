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
  <a style="visibility:hidden;">aaa</a>
  <a href=booking.php>Booking</a>
  <div class="dropdown">
  <button class="dropbtn">
      <i class="fa fa-user">

      </i>
    </button>
    <div class="dropdown-content">
      <a href="../logout.php">Log-Out</a>
    </div>
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<Center>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="foto/rrr.png" class=gambar >
</div>

<div class="mySlides fade">
  <img src="foto/16.jpg" class=gambar>
</div>

<div class="mySlides fade">
  <img src="foto/rrr.png" class=gambar>
</div>

</div>
<div class=konten>
test
<br>
test 1
<br>
test 2
<br>
test3
<br>
test 1
<br>
test 2
<br>
test3<br>
test 1
<br>
test 2
<br>
test3
</div>
<footer>
        <div class="bawah">
          <strong>Copyright &copy; 2019 MR-MichaelRio</a>.</strong> All rights reserved.
        </div>
        
      </footer>
  </center>
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
