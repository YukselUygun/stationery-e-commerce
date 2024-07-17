<?php
ob_start();
session_start();
require 'baglan.php';

if(isset($_POST['kayit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_again=@$_POST['password_again'];
    if(!$username){
        echo"<h1 >Lütfen kullanıcı adınızı girin</h1>";
    }
    elseif(!$password || !$password_again){
        echo"<h1 >Lütfen şifrenizi girin</h1>";
    }
    elseif($password != $password_again){
        echo"<h1 >Girdiğiniz şifreler birleriyle aynı değil</h1>";
    }
    else{
       $sorgu=$db->prepare('INSERT INTO user SET user_name=?,user_password=?') ;
       $ekle=$sorgu->execute([
        $username,$password
       ]);
       if($ekle){
        echo "<h1 >Kayıt başarı ile gerçekleşti, yönlendiriliyorsunuz</h1>";
        header('Refresh:2;index.php');
       }
       else{
        echo "<h1 >Bir hata oluştu,tekrar kontrol edin</h1>";
       }
    }
}
if(isset($_POST['giris'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(!$username){
        echo "<h1 >Lütfen isim değerini giriniz.</h1>";
    }
    elseif(!$password){
        echo"<h1 >Lütfen şifrenizi girin</h1>";
    }
    else{
        $kullanici_sor=$db->prepare('SELECT * FROM user WHERE user_name=? || user_password=?');
        $kullanici_sor->execute([
            $username,$password
        ]);
        $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['username']=$username;
            echo"<h1 >Başarıyla giriş yaptınız,yönlendiriliyorsunuz</h1>";
            header('Refresh:2;../../../anasayfa.php');
        }
        else{
            echo "<h1 >Bir sorun oluştu lütfen daha sonra deneyin</h1>";
        }
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: Arial;
  background: #3aaf9f;
  background-image: url("./resimarkaplan.png");
  padding: 50px;
}
    </style>
</head>
<body>
    
</body>
</html>