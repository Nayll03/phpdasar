<?php
require 'functions.php';

$id = $_GET["id"]; 

$mhs = query("SELECT * FROM siswa WHERE id = $id")[0];



if( isset($_POST["submit"]) ){
     


    if( ubah($_POST) > 0 ){
        echo "
            <script>
                 alert('data berhasil diubah!');
                 document.location.href = 'latihan1.php';
            </script>
        ";
    }else {
        echo "
        <script>
           alert('data gagal diubah!');
           document.location.href = 'latihan1.php';
        </script>
        ";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Siswa</title>
</head>
<body>

    <h1>Ubah Data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

        <ul>
            <li>
                <label for="nrp">NRP :</label> <br>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>"><br><br>
            </li>
            <li>
            <label for="nama">Nama :</label> <br>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>"><br><br>

            </li>
            <li>
            <label for="email">Email :</label> <br>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>"><br><br>
            </li>
            <li>
            <label for="jurusan">Jurusan :</label> <br>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>"><br><br>
            </li>
            <li>
            <label for="gambar">Gambar :</label> <br>
            <img src="img/<?= $mhs['gambar']; ?>"width="50"><br>
                <input type="file" name="gambar" id="gambar"><br><br>
            </li>
            
                <button type ="submit" name="submit">Ubah Data!</button>
            
        </ul>
    </form>
</body>
</html>