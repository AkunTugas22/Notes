<html>
<head>
<title>Notes</title>
<style>
    .container 
    {
      height: 250px;
      position: relative;
    }
    
    .center 
    {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .button 
    {
     background-color: #4CAF50; 
     border: 3px solid #4CAF50;
     color: white;
     padding: 17px 32px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     transition-duration: 0.5ms;
    }
    .button:hover 
    {
     background-color: white; 
     color: black;
    }
</style>
</head>
<body>
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
$author = $_REQUEST['author'];
$judul = $_REQUEST['judul'];
$isi = $_REQUEST['isi'];

$sql = "INSERT INTO notes (author, waktu, judul, isi) values ('$author', now(), '$judul', '$isi')";

if(mysqli_query($db, $sql))
{
    echo "<h2>Catatan berhasil disimpan</h2>";
}
else
{
    echo "<h2>Catatan gagal disimpan</h2>";
}
?>
<div class="container">
    <div class="center">
        <a href="index.html"><button class="button">Kembali</button></a>
    </div>
</div>
</body>
</html>