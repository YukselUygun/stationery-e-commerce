<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
* {
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
a{  
    text-align:center;
    text-decoration:none;
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
  background-color: #05507f;
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
            <h1>Yönlendirme Sayfası</h1>
                </div>
         
        <div class="login-form">
            <div class="control-group">
                <div style="background-color: #05507f; text-align:center" class="btn">
                    <a style="color: aliceblue;" href="./login">Kullanıcı Paneli Giriş</a>
                </div>
            </div>
            <div class="control-group">
                <div style="background-color: #05507f;; text-align:center" class="btn">
                    <a style="color: aliceblue;" href="./Admin Login">Yönetici Panel Girişi</a>
                </div>
            </div>
           
            
        </div>
 
       
    </div>
    
 </div>
</body>
</html>