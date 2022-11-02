<html>
<head>
<title>Notes</title>
</head>
<body>
<h1 style="text-align: center">Notes</h1>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$nama_database = "notes";

$db = mysqli_connect ($server, $user, $pass, $nama_database);
if (!$db)
{
    die ("Koneksi Database Gagal" . mysqli_connect_error());
}
$sql = mysqli_query ($db, "SELECT id, author, waktu, judul FROM notes");
echo "<table border = '1'>
<tr>
<th>id</th>
<th>Author</th>
<th>Judul</th>
<th>Waktu</th>
</tr>";
while ($baris=mysqli_fetch_array($sql))
{
    echo "<tr>";
    echo "<td>". $baris ['id']. "</td>";
    echo "<td>". $baris ['author']. "</td>";
    echo "<td>". $baris ['judul']. "</td>";
    echo "<td>". $baris ['waktu']. "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</br>
<form action="tampil.php" method="POST">
Masukkan id catatan yang ingin di lihat 
<input type="text" name="input">
<input type="submit" value="Submit">
</form>
<a href ="index.html"><button style="width: 70px; height: 30px">Kembali</button></a>
</body>
</html>