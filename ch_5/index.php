<?php  

$angka = 1;

$siswa = [
    [
        "No" => " ",
        "Nama" => "Alvaro Aditya",
        "Kelas" => "XII TSM 2",
        "Alamat" => "Pemalang"
    ],
    [
        "No" => " ",
        "Nama" => "Nafisah Putri",
        "Kelas" => "XII TB 2",
        "Alamat" => "Batang"
    ],
    [
        "No" => " ",
        "Nama" => "Kenzo Aldebara",
        "Kelas" => "XII TKJ 1",
        "Alamat" => "Pekalongan"
    ]
];

?>
<html>
  <head>
    <title>Foreach</title>
  </head>
  <body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>

        <?php  foreach( $siswa as $sws ) : ?>
        <tr>
            <td><?php echo $angka++; ?></td>
            <td><?php echo $sws["Nama"]; ?></td>
            <td><?php echo $sws["Kelas"]; ?></td>
            <td><?php echo $sws["Alamat"]; ?></td>
        </tr>
        <?php  endforeach; ?>
    </table>