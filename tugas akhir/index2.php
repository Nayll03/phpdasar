<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["submit"]) ) : ?>
        <h1>Hallo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
<form action="" method="post">
    Masukkan Nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim</button>
</form>
<br>
<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">cari!</button>

</body>
</html>