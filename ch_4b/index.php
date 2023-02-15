<?php

$i = 1;

$siswa = [
    [
        "Ahmad Rozikin",
        "XII TKR",
        "Pemalang"
    ],
    [
        "Intan Erlina",
        "XII TB",
        "Batang"
    ],
    [
         "Candra Yogi",
         "XII RPL",
         "Pekalongan"
    ]
];
?>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php foreach ($siswa as $sw) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?=$sw[0] ?></td>
                <td><?=$sw[1] ?></td>
                <td><?=$sw[2] ?></td>
            </tr>
            <?php endforeach; ?>
         </table>