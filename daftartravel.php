<html>
<head>
    <title>Pendaftaran Travel Agen</title>
    <link rel="stylesheet" href="css/dtrtravel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
<header>
    <div class=header>
    <img src="foto/tc.png">
    </div>
    </header>
  <center>
    <div class=konten>
    <form action="prosesdaftartravel.php" method="post">
    <h3><br>Pendaftaran Travel</h3>
        <div class=form>
            <input type=text class=input name=email placeholder=Email...>
            <input type=password class=input name=password placeholder=Password...>
            <input type=text class=input name=perusahaan placeholder="Nama Perusahaan...">
            <input type=text class=input name=alamat placeholder=Alamat...>
            <input type=text class=input name=nomor placeholder="Nomor Telp...">
            <input type=hidden class=input name=level value=user>
            </div>
            <input type="submit" class="submit" name=submit value="submit">
        </form>
    </div>
    </center>
</body>
</html>

<style>

    </style>
