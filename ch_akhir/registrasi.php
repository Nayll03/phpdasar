<?php
require 'functions.php';

if( isset($_POST["register"])) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
		         alert('user baru berhasil ditambahkan');
			  </script>";
	}else {
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman registrasi</title>
<style>
	*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}

body{
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
	background: linear-gradient(-45deg, #EAD6EE, #EE7752, #6CC6CB, #23A6D5, #23D5AB, #067D68);


}

h1 {
  text-align: center;
  padding-left: 50px;
  padding-bottom: 20px;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background-color: rgba(0,0,0,.7);
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
    color: #90caf9;
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

<h1> registrasi</h1>

<form action="" method="post">
	<ul>
		
			<label for="username">username :</label>
			<input type="text" name="username" id="username">
		<label for="password">password :</label>
			<input type="password" name="password" id="password">
		<label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2"><br>

			<button type="submit" name="register">Register</button>
		
	</ul>
</form>
</div>

</body>
</html>