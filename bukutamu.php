<html>
<head>
	<title>Contoh From dengan Post</title>
</head>
<body>
<h1>Buku Tamu</h1>
Komentar dan saran sangat kami butuhkan untuk meningkatkan kualitas situs kami.
<hr>
<form action="proc_bukutamu.php" method="post">
<pre>
Nama Anda	: <input type="text" name="nama" size="25" maxlength="50">
Email Address : <input type="text" name="email" size="25" maxlength="50">
Komentar	: <textarea name="komentar" cols="30" rows="5"> </textarea>
<input type="submit" value="kirim">
<input type="reset" value="ulangi">
</pre>
</form>
</body>
</html>