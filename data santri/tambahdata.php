<?php
session_start();

require 'functions.php';


if( isset($_POST["submit"]) ){

    

    if( tambah($_POST) > 0 ){
        echo "
            <script>
                 alert('data berhasil ditambahkan');
                 document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
           alert('data gagal ditambahkan');
           document.location.href = 'index.php';
        </script>
        ";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Siswa</title>
    <style>
      body{
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-color: #708090;
}
h1 {
  padding-left: 20px;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background: linear-gradient(-45deg, #778899,#C0C0C0);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
	border-radius: 30px;

}
.container h1{
    text-align: left;
    color: #fafafa;
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
    color: #fff;
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
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            	<label for="id">No : </label>
                 <input type="text" name="id" id="id" required>

				<label for="nrp">NRP : </label>
                 <input type="text" name="nrp" id="nrp" required>
                <label for="nama">Nama :</label> 
                <input type="text" name="nama" id="nama">
                 <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            <label for="jurusan">Jurusan :</label>
            <input type="jurusan" name="jurusan" id="jurusan">
            <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar"><br>
                <button type ="submit" name="submit">Tambah Data!</button>
            
        </ul>
    </form>
</div>
</body>
</html>
