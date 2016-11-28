<?php include_once 'header.php'; ?>
<html>
<head>
<title>Buku Tamu</title>
</head>
<body>
<h1><center>Buku Tamu </center></h1>
<form align="center" action="prosestambah.php" method="POST"><center>
Id			: <input type="text" name=id" size="35" maxlength="50"><br>
Nama		: <input type="text" name="nama" size="35" maxlength="50"><br>
Email		: <input type="text" name="email" size="35" maxlength="50"><br>
Komentar	: <textarea name="komentar" rows="5" cols="30"></textarea><br>
<input type="submit" value="Simpan">
<input type="reset" value="Reset">
</form></center>
<h3><center>Selamat Datang</center></h3>
</body>
</html>
<?php include_once 'footer.php'; ?>
