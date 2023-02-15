<?php
session_start();

require 'functions.php';

$id = $_GET["id"]; 

$mhs = query("SELECT * FROM siswa WHERE id = $id")[0];



if( isset($_POST["submit"]) ){
     


    if( ubah($_POST) > 0 ){
        echo "
            <script>
                 alert('data berhasil diubah!');
                 document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
           alert('data gagal diubah!');
           document.location.href = 'index.php';
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
            
            <label for="nama">Nama :</label> 
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            <label for="alamat">Alamat :</label> 
                <input type="text" name="alamat" id="alamat" value="<?= $mhs["alamat"]; ?>">
            <label for="notelp">No Telp :</label> 
                <input type="text" name="notelp" id="notelp" value="<?= $mhs["notelp"]; ?>">
            <label for="namaayah">Nama Ayah :</label> 
                <input type="text" name="namaayah" id="namaayah" value="<?= $mhs["namaayah"]; ?>">
            <label for="namaibu">Nama Ibu :</label> 
                <input type="text" name="namaibu" id="namaibu" value="<?= $mhs["namaibu"]; ?>">
           
                <button type ="submit" name="submit">Ubah Data!</button>
            
        </ul>
    </form>
</div>
</body>
</html>