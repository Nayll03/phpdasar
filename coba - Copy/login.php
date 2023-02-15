<?php
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: latihan1.php");
    exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1){

       $row = mysqli_fetch_assoc($result);
       if(password_verify($password, $row["password"]) ) {
         
           $_SESSION["login"] = true;

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
    <style type="text/css">
body {
  background: #607D8B;
  font-family: arial;
}
.login-form h1 {
  font-size: 36px;
  text-align: center;
  color: #45aba6;
  margin-bottom: 30px;
  font-weight: normal;
}
.login-form .social-icon {
    width: 100%;
    font-size: 20px;
    padding-top: 20px;
    color: #fff;
    text-align: center;
    float: left;
}
.login-form {
    background: #fff;
    width: 450px;
    border-radius: 6px;
    margin: 0 auto;
    display: table;
    padding: 15px 30px 30px;
    box-sizing: border-box;
}
.form-group {
  float: left;
  width: 100%;
  margin: 0 0 15px;
  position: relative;
}
.login-form input {
    width: 100%;
    padding: 5px;
    height: 56px;
    border-radius: 74px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 15px;
    padding-left: 75px;
}
.login-form .form-group .input-icon {
    font-size: 15px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    height: 100%;
    padding-left: 35px;
    color: #666;
}
.login-form .login-btn {
  background: #45aba6;
  padding: 11px 50px;
  border-color: #45aba6;
  color: #fff;
  text-align: center;
  margin: 0 auto;
  font-size: 20px;
  border: 1px solid #45aba6;
  border-radius: 44px;
  width: 100%;
  height: 56px;
  cursor: pointer;
}
.login-form .reset-psw {
  float: left;
  width: 100%;
  text-decoration: none;
  color: #45aba6;
  font-size: 14px;
  text-align: center;
  margin-top: 11px;
}
.login-form .social-icon button {
    font-size: 20px;
    color: white;
    height: 50px;
    width: 50px;
    background: #45aba6;
    border-radius: 60%;
    margin: 0px 10px;
    border: none;
    cursor: pointer;
}
.login-form button:hover{
  opacity: 0.9;
}
.login-form .seperator {
  float: left;
  width: 100%;
  border-top: 1px solid #ccc;
  text-align: center;
  margin: 50px 0 0;
}
.login-form .seperator b {
  width: 40px;
  height: 40px;
  font-size: 16px;
  text-align: center;
  line-height: 40px;
  background: #fff;
  display: inline-block;
  border: 1px solid #e0e0e0;
  border-radius: 50%;
  position: relative;
  top: -22px;
  z-index: 1;
}
.login-form p {
  float: left;
  width: 100%;
  text-align: center;
  font-size: 16px;
  margin: 0 0 10px;
}

</style>
</head>
<body>
    
<h1>halaman login</h1>

<?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password tidak sesuai</p>
<?php endif; ?>
<div class="login-form">
<form action="" method="post">

     <ul>
        <div class="form-group">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
            <span class="input-icon"><i class="fa fa-envelope"></i></span>
        </div>
        <div class="form-group">
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
         </div>      
            <button class="login-btn" type="submit" name="login">Login</button>
            <a class="reset-psw" href="#">Forgot your password?</a>
        </ul>    

</form>

</body>
</html>