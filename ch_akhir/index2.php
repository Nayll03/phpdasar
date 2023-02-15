<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
    <style>
        body {
    height: 70vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
	background: linear-gradient(-45deg,#23D5AB, #067D68);
    text-align: center;
    padding-top: 200px;
        }
    </style>
</head>
<body>
    <?php if(isset($_POST["submit"]) ) : ?>
        <h1>Hallo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
<form action="" method="post">
    Masukkan Nama :<br>
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim</button>
</form>


</body>
</html>