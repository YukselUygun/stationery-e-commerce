<?php include "baglanti.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./sepet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />  
    <meta charset="UTF-8">
    <script src="./sepet.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section id="header">
        <a href="../Sepet"><img style="width: 30%;" src="a (5).png" class="logo" alt=""></a>
        
        <div>
            <ul id="navbar">
                <li><a  href="./anasayfa.php">Anasayfa</a></li>
                <li><a href="./hakkimizda.php">Hakımızda</a></li>
                <li><a  href="./kitaplar.php">Kitaplar</a></li>
                <li><a href="./defterler.php">Defterler</a></li>
                <li><a href="./kalemler.php">Kalemler</a></li>
                <li><a  href="./silgiler.php">Silgiler</a></li>
                <li><a href="./kalemtıraşlar.php">Kalemtraşlar</a></li>
                <li><a href="./çantalar.php">Çantalar</a></li>
                <li><a  href="./boyalar.php">Boyalar</a></li>
                <li id="lg-bag"><a href="./iletisim.php"><i class="fa-solid fa-phone"></i></a></li>
                <li class="active" id="lg-bag"><a href="./sepet.php"><i class="fa-solid fa-cart-shopping"></i></a></li>

            </ul>
        </div>
       
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 w-100">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ürün</th>
                            <th scope="col">İçerik</th>
                            <th scope="col">Ürün adı ve özelliği</th>
                            <th scope="col">Fiyat</th>
                            <th scope="col">Sayısı</th>
                            <th scope="col">Ürün Silme</th>
                         
                        </tr>
                    </thead>
                    <tbody>