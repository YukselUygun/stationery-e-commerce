<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>* {
  box-sizing: border-box;
}
*:focus {
  outline: none;
}
body {
  font-family: Arial;
  background: #3aaf9f;
  background-image: url("./resimarkaplan.png");
  padding: 50px;
}
.login {
  margin: 20px auto;
  width: 300px;
}
.login-screen {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
}
.app-title {
  text-align: center;
  color: #777;
}
.control-group {
  margin-bottom: 10px;
}
input {
  text-align: center;
  background-color: #ecf0f1;
  border: 2px solid transparent;
  border-radius: 3px;
  font-size: 16px;
  font-weight: 200;
  padding: 10px 0;
  width: 250px;
  transition: border .5s;
}
input:focus{
  border:2px solid #3498d8;
  box-shadow: none;
}
.btn{
  border: 2px solid transparent;
  background-color: #3498d8;
  color:#ffffff;
  font-size: 16px;
  line-height: 25px;
  padding:10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
  margin-top: 5px;
}
.btn:hover{
background-color: #2980B9;
}
</style>
</head>
<body>
 <div class="login">
    <div class="login-screen">
                <div class="app-title">
            <h1>Kayıt Ol</h1>
                </div>
    <form action="islem.php" method="post">       
        <div class="login-form">
            <div class="control-group">
                <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                <label class="login-field-icon fui-user"for="login-name"></label>
            </div>
            <div class="control-group">
                <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                <label class="login-field-icon fui-user"for="login-pass"></label>
            </div>
            <div class="control-group">
                <input type="password" name="password_again" class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                <label class="login-field-icon fui-user"for="login-pass"></label>
            </div>
            
            <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Yap</button>
        </div>
    </form> 
        <a href="index.php"><button class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
    </div>
    
 </div>
</body>
</html>