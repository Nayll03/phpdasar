<?php
session_start();
require 'functions.php';


if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key '];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }


}

if( isset($_SESSION["login"]) ) {
    header("Location: latihan1.php");
    exit;
}


if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1){

       $row = mysqli_fetch_assoc($result);
       if(password_verify($password, $row["password"]) ) {
         
           $_SESSION["login"] = true;

           if( isset($_POST['remember']) ) {

            setcookie('id', $row['id'], time() + 60);
            setcookie('key', hash('sha256', $row['username']), time()+60);

           }

           header("Location: latihan1.php");
           exit;
       }

    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>halaman login</title>
    <style>
       body{
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background: linear-gradient(-45deg, #EAD6EE, #EAD6EE, #A0F1EA, #067D68 );

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
    background-color: rgb(239, 255, 255);
    box-shadow: 0 0 10px rgba(0,0,0);
	border-radius: 100px;

}
.container h1{
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
    color: #000000;
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

<center><h1>Login</h1></center>

<?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password tidak sesuai</p>
<?php endif; ?>
<form action="" method="post">

     <ul>
        
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
         
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        
            <input type="checkbox" name="remember" id="remember">
            <center><label for="remember">remember me</label></center><br>
        
            <button type="submit" name="login">Login</button><br>
        </ul>    

</form>
</div>
</body>
</html>