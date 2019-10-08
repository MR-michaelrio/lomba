<html>
<head>
 <title>Login Perusahaan</title>
 <link rel="stylesheet" href="css/logininput.css">
</head>
<body>  
  <form class="box" action="prosesloginperusahaan.php" method="post">
    <img src="foto/tc.png" class=gambar>
<h1>Log-In</h1>
			<input type="text" name="email" class="form_login" placeholder="Email .." required="required">
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>

 </form>

</div>

</body>
</html>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Email dan Password tidak sesuai !</div>";
		}
	}
	?>