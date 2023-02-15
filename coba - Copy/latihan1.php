<?php 
session_start();


if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';
$siswa = query("SELECT * FROM siswa");

if( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <style>
        body{
            text-align: center;
            background: linear-gradient(-45deg, #EE7752, #6CC6CB, #23A6D5, #23D5AB, #23D5AB, #067D68, #067D68);
        }
        h1 {
            text-align: center;
            padding-left: 20px;
            padding-bottom: 10px;
            color: #000;
        }

        a {
            color: #000000;
        }
        
    </style>
</head>
<body>
 <h1>Data Siswa</h1>
 <a href="logout.php">Logout ~</a>
 <a href="tambah.php">Tambah Data Siswa ~</a>
 <a href="registrasi.php">Registrasi</a>
 <br><br>

 <form action="" method="post">
        <input type="text" name="keyword" size="90" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">cari!</button>

 </form>
<br>
 <center><table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>NO.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr> 

<?php $i = 1; ?>
<?php foreach( $siswa as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"];?>">ubah</a> ||
        <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin anda ingin manghapus?');">hapus</a>
    </td>
    <td><img src="img/<?= $row ["gambar"]; ?>" width="50"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table></center>
<br>
</body>
</html>