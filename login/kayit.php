<?php
require 'baglan.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
            <h1>Kayıt Ol </h1>
            </div>
            <form action="islem.php" method="post">
            <div class="login-form">
                <div class="control-group">
                    <input type="text" name="studentnumber" class="login-field" id="login-no" placeholder="Öğrenci No">
                    <label class="login-field-icon fui-user" for="login-no"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password" class="login-field" id="login-password" placeholder="Şifre">
                    <label class="login-field-icon fui-user" for="login-password"></label>
                    <br><br>
                    <input type="password" name="password_again" class="login-field" id="login-password" placeholder="Tekrar Şifre">
                    <label class="login-field-icon fui-user" for="login-password"></label>
                    <br>
                    <br>
                    <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>

                </div>

            </div>
            </form>
            <a href="anasayfa.html"><button  class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
        </div>
    </div>




    
</body>
</html>