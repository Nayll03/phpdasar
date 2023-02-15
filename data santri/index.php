<?php 
session_start();

require 'functions.php';
$siswa = query("SELECT * FROM siswa");

if( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <title> Data Santri</title>
  <style>
    .body{
      text-align: center;
      background-color: #7F669D;
    }
    
  </style>
</head>
<center>
<body style="background-color: #7F669D">
      <h1 style="margin-top:30px;">Daftar Santri</h1><br>
      <form action="" method="post">
        <input type="text" name="keyword" size="80" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">cari!</button>
      </form>
      <br>
      <button type="button" class="btn btn-primary">Tambah Data Siswa</button>
      <br><br>
      <table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>NO.</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No.Telp</th>
    <th>Nama Ayah</th>
    <th>Nama Ibu</th>
    <th>Aksi</th>
</tr> 

<?php $i = 1; ?>
<?php foreach( $santri as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["alamat"]; ?></td>
    <td><?= $row["notelp"]; ?></td>
    <td><?= $row["namaayah"]; ?></td>
    <td><?= $row["namaibu"]; ?></td>

</tr>
<?php $i++;?>                                     
<?php endforeach; ?>

</table>
<br>

</body>
</center>

</html>