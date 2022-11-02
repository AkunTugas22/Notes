<html>
<head>
<title>Notes</title>
<style>
.button 
    {
     background-color: #4CAF50; 
     border: 3px solid #4CAF50;
     color: white;
     padding: 10px 20px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 14px;
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
$input = $_REQUEST['input'];
$sql = mysqli_query ($db, "SELECT * FROM notes WHERE id=$input");
$out=mysqli_fetch_array($sql);
?>
<b>Judul :</b> <?php echo $out ['judul'];?></br>
<b>Author :</b> <?php echo $out ['author'];?></br>
<b>Waktu :</b> <?php echo $out ['waktu'];?></br></br>
<b>isi :</b> </br></br><?php echo $out ['isi'];?></br>
</br>
<a href="index.html"><button class="button">Kembali</button></a>
</body>
</html>