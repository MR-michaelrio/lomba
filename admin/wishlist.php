<style>
body {
  font-family: "Lato", sans-serif;
  background: #aca5ac;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #8c878c;
  overflow-x: hidden;
  padding-top: 25px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-family: arial,sans-serif,helvetica;
  font-size: 20px;
  color: #f8ff00;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
}

.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-family: arial,sans-serif,helvetica;
  font-size: 20px;
  color: #f8ff00;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
  transition:0.5s;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  opacity:0.5;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}
/* Main content */  
.main {
  font-size: 20px; /* Increased text to enable scrolling */
  margin-left:-8px;
  width:97.5%;
  text-align: center;
  background: #8c878c;
  margin-top:-1.5%;
  border-right: 20px solid #fbff78;
  border-left: 20px solid #fbff78;
  position:fixed;
}
.footer{
    position:fixed;
    transform: translate(550%,50%);
}
.button {
  display: inline-block;
  border-radius: 0px;
  background-color:#008CBA;;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  text-decoration: none;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.btn-group .button {
  background-color: #8c878c; /* Green */
  border: none;
  color: #fbff78;
  width:8%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
 
}

.btn-group .button:hover {
 background-color:#4d4d4d;
}
</style>
<?php
require_once "koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM wishlist");
?>
<html>
<head>
<title>Users List</title>
</head>

<div class="main">
    <h1>LEGER X-AKL</h1>
    <div class="btn-group">
    <a class="button" href=cetaklegerxakl.php>Print Leger</a>
    <a class="button" href=importexcel/importxakl.php>Insert Murid</a>
  <a class="button" href=logout.php>LOGOUT</a>
</div>
</div>
<br><br><br><br><br><br><br>
<body>
<form name="frmUser" method="post" action="">
<center>
<table border=3 width=500px style="margin-top:-5px">  
<?php
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td rowspan=6><?php echo $row["nomor"]; ?></td>
</tr>
<tr>
<td><?php echo $row["nama"]; ?></td>
</tr>
<tr>
<td><?php echo $row["email"]; ?></td>    
</tr>
<tr>
<td><?php echo $row["telp"]; ?></td>    
</tr>
<tr>
<td><?php echo $row["dari"]; ?></td>    
</tr>
<tr>
<td><?php echo $row["tiba"]; ?></td>    
</tr>
<?php
}
?>

</table>
</form>
<br>
<input type="button" class=button name="update" value="Update" onClick="setUpdateAction();" /> 
<input type="button" class=button name="delete" value="Delete"  onClick="setDeleteAction();" />

</body></html>
