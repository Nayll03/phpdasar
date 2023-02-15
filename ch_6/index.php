<?php

$siswa = [
  
  [
    "nrp" => "17463323",
    "nama" => "Zayyan Elvano Alfarezi",
    "email" => "zynAlfa@gmail.com",
    "jurusan" => "RPL",
    "gambar" => "cowok.jpg"
    
  ],
  [
    "nama" => "Friska Felicia Ivanka",
    "nrp" => "9049057",
    "email" => "FFI_14@gmail.com",
    "jurusan" => "TKJ",
    "gambar" => "3.jpg"
  ],
  [
    "nama" => "Arabella Indira Ginanita",
    "nrp" => "94364792",
    "email" => "araa.02@gmail.com",
    "jurusan" => "TB",
    "gambar" => "im.jpg"
  ]
  ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar siswa</h1>
    <ul>
      <?php foreach( $siswa as $mhs ) : ?>     
        <li>
            <a href="index1.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"];  ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        
      <?php endforeach; ?>
</ul>
<a href="latihan1.php"> Data siswa</a>
</body>
</html>
