<?php
session_start();


if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

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
    <style>
        <style>
      .body{
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
.h2 {
    text-align: center;
  padding-left: 20px;
  padding-bottom: 20px;

}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
	border-radius: 50px;
    background-color: #E6E6FA;


}
.container h2{
    text-align: left;
    color: #000000;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #000000;
}
.container label{
    text-align: left;
    color: #000000;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #000000;
    color: #000;
    font-size: 20px;
}
.container form button{
    width: 100%;
    height: 40px;
    padding: 5px 0;
    border: none;
    background-color:#000000;
    font-size: 18px;
    color: #fafafa;
    border-radius: 20px;
}

    </style>
</head>
<body>
<div class="container">

    <h2>Ubah Data Siswa</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

        <ul>
            
                <label for="nrp">NRP :</label> 
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            <label for="nama">Nama :</label> 
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            <label for="email">Email :</label> 
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            <label for="jurusan">Jurusan :</label> 
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            <label for="gambar">Gambar :</label> <br>
            <img src="img/<?= $mhs['gambar']; ?>"width="50"><br>
                <input type="file" name="gambar" id="gambar"><br>
            
                <button type ="submit" name="submit">Ubah Data!</button>
            
        </ul>
    </form>
</div>
</body>
</html>