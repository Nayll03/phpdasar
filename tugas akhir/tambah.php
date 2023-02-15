<?php
session_start();


if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';


if( isset($_POST["submit"]) ){

    

    if( tambah($_POST) > 0 ){
        echo "
            <script>
                 alert('data berhasil ditambahkan');
                 document.location.href = 'latihan1.php';
            </script>
        ";
    }else {
        echo "
        <script>
           alert('data gagal ditambahkan');
           document.location.href = 'latihan1.php';
        </script>
        ";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Siswa</title>
    
</head>
<body>
    
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li> 
				<label for="nrp">NRP : </label><br>
                 <input type="text" name="nrp" id="nrp" required><br><br>
            </li>
            <li>
            <label for="nama">Nama :</label> <br>
                <input type="text" name="nama" id="nama"><br><br>

            </li>
            <li>
            <label for="email">Email :</label><br>
                <input type="email" name="email" id="email"><br><br>
            </li>
            <li>
            <label for="jurusan">Jurusan :</label><br>
                <input type="text" name="jurusan" id="jurusan"><br><br>
            </li>
            <li>
            <label for="gambar">Gambar :</label><br>
                <input type="file" name="gambar" id="gambar"><br><br>
            </li>
            
                <button type ="submit" name="submit">Tambah Data!</button>
            
        </ul>
    </form>

</body>
</html