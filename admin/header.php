<?php
session_start();
if(!isset($_SESSION ['username'])){
header ('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travell</title>
     <link rel="icon" href="img/tc.png">
    <link rel="stylesheet" href="css/oke.css">
    <link rel="stylesheet" href="css/slider.css">
</head>

<body>
<div class="header">
    <a href="#default"><img src=img/tc.png></a>
    <div class="header-right">
    <div class="dropdown" style="float:right;">

  <span class="dropbtn icon-user">    
    <?php
    include "../koneksi.php";
    $username=$_SESSION['username'];
    $q = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username'");
    while($b = mysqli_fetch_array($q)){
    echo "".$b['username']."";
    } 
    ?>
    </span>
  <div class="dropdown-content">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
</div>

    </div>  


</div>
</body>
</html>
