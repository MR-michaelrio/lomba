<html>
<head>
 <title>Login Sederhana Dengan MySqli</title>
 <link rel="stylesheet" href="css/logininput.css">
</head>
<body>  
  <form class="box" action="prosesdaftar.php" method="post">
    <img src="img/tc.png" class=gambar>
<h1>Log-In</h1>
			<input type="text" name="username" class="form_login" placeholder="Email .." required="required">
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 			 <input type="hidden" name="level" value=user>
			<input type="submit" name="submit" value="Daftar">
 
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