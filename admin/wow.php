<?php
session_start();
if(!isset($_SESSION ['username'])){
header ('location: login.php');
}
?>
<html>
<head>
</head>
<body>
<?php
include "../koneksi.php";
$username=$_SESSION['username'];
$q=mysqli_query("select * from login where username='$username'");
while($b=mysqli_fetch_array($q)){
echo "Status Anda".$b['username']."";
} 
?>
</body>
</html>