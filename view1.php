<?php
include_once 'header.php';
$conn = mysql_connect("localhost","root","") or die("Koneksi gagal!!");
mysql_select_db("147006125",$conn);
$hasil = mysql_query("select * from bukutamu",$conn);
$jumlah = mysql_num_rows($hasil);
echo "<center><h1>Daftar Pengunjung</h1></center>";
?>
<html>
<head>
   <title>View Dengan Tabel</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>
<body>
   <h3>View Dengan Tabel Friska - 147006125</h3>
<table>
<tr>
	<th>Id</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Komentar</th>
</tr>
<?php
while($baris = mysql_fetch_array($hasil)) {
	echo "<tr>";
	echo "<td>" .$baris['id'];
	echo "<td>" .$baris['nama'];
	echo "<td>" .$baris['email'];
	echo "<td>" .$baris['komentar'];
	echo "</tr>";
}
?>
</table>
</body>
</html>
<?php echo "<h3>Jumlah Pengunjung : $jumlah</h3>";
include_once 'footer.php'; ?>
<?php
include_once 'header.php';
$conn = mysql_connect("localhost","root","") or die("Koneksi gagal!!");
mysql_select_db("147006125",$conn);
$hasil = mysql_query("select * from bukutamu",$conn);
$jumlah = mysql_num_rows($hasil);
echo "<center><h1>Daftar Pengunjung</h1></center>";
?>
<html>
<head>
   <title>View Dengan Tabel</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>
<body>
   <h3>View Dengan Tabel Friska - 147006125</h3>
<table>
<tr>
	<th>Id</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Komentar</th>
</tr>
<?php
while($baris = mysql_fetch_array($hasil)) {
	echo "<tr>";
	echo "<td>" .$baris['id'];
	echo "<td>" .$baris['nama'];
	echo "<td>" .$baris['email'];
	echo "<td>" .$baris['komentar'];
	echo "</tr>";
}
?>
</table>
</body>
</html>
<?php echo "<h3>Jumlah Pengunjung : $jumlah</h3>";
include_once 'footer.php'; ?>
<?php
include_once 'header.php';
$conn = mysql_connect("localhost","root","") or die("Koneksi gagal!!");
mysql_select_db("147006125",$conn);
$hasil = mysql_query("select * from bukutamu",$conn);
$jumlah = mysql_num_rows($hasil);
echo "<center><h1>Daftar Pengunjung</h1></center>";
?>
<html>
<head>
   <title>View Dengan Tabel</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>
<body>
   <h3>View Dengan Tabel Friska - 147006125</h3>
<table>
<tr>
	<th>Id</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Komentar</th>
</tr>
<?php
while($baris = mysql_fetch_array($hasil)) {
	echo "<tr>";
	echo "<td>" .$baris['id'];
	echo "<td>" .$baris['nama'];
	echo "<td>" .$baris['email'];
	echo "<td>" .$baris['komentar'];
	echo "</tr>";
}
?>
</table>
</body>
</html>
<?php echo "<h3>Jumlah Pengunjung : $jumlah</h3>";
include_once 'footer.php'; ?>
<?php
include_once 'header.php';
$conn = mysql_connect("localhost","root","") or die("Koneksi gagal!!");
mysql_select_db("147006125",$conn);
$hasil = mysql_query("select * from bukutamu",$conn);
$jumlah = mysql_num_rows($hasil);
echo "<center><h1>Daftar Pengunjung</h1></center>";
?>
<html>
<head>
   <title>View Dengan Tabel</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>
<body>
   <h3>View Dengan Tabel Friska - 147006125</h3>
<table>
<tr>
	<th>Id</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Komentar</th>
</tr>
<?php
while($baris = mysql_fetch_array($hasil)) {
	echo "<tr>";
	echo "<td>" .$baris['id'];
	echo "<td>" .$baris['nama'];
	echo "<td>" .$baris['email'];
	echo "<td>" .$baris['komentar'];
	echo "</tr>";
}
?>
</table>
</body>
</html>
<?php echo "<h3>Jumlah Pengunjung : $jumlah</h3>";
include_once 'footer.php'; ?>
