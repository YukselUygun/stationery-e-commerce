<?php include "baglanti.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="detaylar.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body>

    <section id="header">
        <a href="#"><img style="width: 30%;" src="../listele/logolar/a (5).png" class="logo" alt=""></a>
        
        <div>
            <ul id="navbar">
             <li><a class="active" href="Anasayfa.php">Anasayfa</a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li><a  href="kitaplar.php">Kitaplar</a></li>
                <li><a href="defterler.php">Defterler</a></li>
                <li><a href="kalemler.php">Kalemler</a></li>
                <li><a  href="silgiler.php">Silgiler</a></li>
                <li><a href="kalemtıraşlar.php">Kalemtraşlar</a></li>
                <li><a href="çantalar.php">Çantalar</a></li>
                <li><a href="boyalar.php">Boyalar</a></li>
                <li id="lg-bag"><a href="iletisim.php"><i class="fa-solid fa-phone"></i></a></li>
                <li class="active" id="lg-bag"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="iletisim.php"><i class="fa-solid fa-phone"></i></a>
            <a class="active" href="Sepet2.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
            
        </div>
    </section> 

    <?php
    if(!isset($_GET['id']) || empty($_GET['id'])){
        header('Location:anasayfa.php');
        exit;
    }
    $table = 'anasayfa';
    $sorgu = $db->prepare("SELECT * FROM $table WHERE id = ?");
    $sorgu->execute([$_GET['id']]);
    $data =   $sorgu->fetch(PDO::FETCH_ASSOC);

?>
   

    <section id="prodetails" class="section-p1">
            <div class="sepetana">
                <div class="single-pro-image">
        
                    <img src="../Listele/Ürünler/<?= $data['resim_url']?>" width="100%" id="MainImg" alt="batu.png">
                    
                

                    </div>
                </div>
            </div>
            <div class="sepetbaba">
                <div class="single-pro-details">
                    <br><br><br>
            <i style="opacity: 0,5;"><?=$data['icerik']?></i>

            <h2><?=$data['baslik']?></h2>
            <br>
            <i style="opacity: 0,5;"><?=$data['marka']?></i>
            <p style="font-family: 'Kaushan Script', cursive;font-size: 25px;color: black;"><?=$data['fiyat']?>TL</h2>
            <br><br>
     
            <a href="./sepetadd.php?id=<?=$data['id']?>" style="background-color: rgb(105, 218, 255); color: black;border-radius: 20px;padding: 10px;">Sipariş Ver</a>
            <br><br>
            <h4>Ürün Detayı</h4>
            <p style="text-align: justify;opacity: 0,5;color:black;font-size: 15px;"><?=$data['detay']?></i>
                </div>
            </div>
    </section>
   

    
    <footer class="footer">
    <div class="col1">
        <div class="col">
            <img class="logo" src="../kullanıcı panel bölümü/logolar/logo-transparent.png">
            <h4>İletişim</h4>
            <h4 class="col-text"><strong>Adres: </strong>Cumhuriyet mah. Kadribey sok. Üsküdar-İstanbul</h4>
            <h4 class="col-text"><strong>Tel No:</strong>(0216) 443 48 37</h4>
            <h4 class="col-text"><strong>Çalışma Saatleri:</strong> 07:00 - 20:00 </h4>
        </div>
        <div class="col">
        <h4>Anlaşmalı Olduğumuz Kargolar</h4>
        <a href="https://www.yurticikargo.com/">Yurtiçi Kargo </a>
        <a href="https://www.mngkargo.com.tr/">MNG Kargo</a>
        <a href="https://www.ptt.gov.tr/">Ptt Kargo</a>
        <a href="https://www.suratkargo.com.tr/">Sürat Kargo</a>
        <a href="https://www.araskargo.com.tr/">Aras Kargo</a>
        </div>
        <div class="col">
        <h4>Anlaşmalı Olduğumuz Firmalar </h4>
        <a href="https://www.faber-castell.com.tr/">Faber Castell</a>
        <a href="https://www.adel.com.tr/">Adel</a>
        <a href="https://www.iskultur.com.tr/">Türkiye İş Bankası Kültür Yayınları</a>
        <a href="https://www.remzi.com.tr/anasayfa">Remzi Kitabevi</a>
        <a href="https://www.yapikrediyayinlari.com.tr/">Yapı Kredi Yayınları</a>
        <a href="https://www.pelikankitabevi.com.tr/">Pelikan</a>
        <a href="https://www.rotring.com.tr/">Rotring</a>
        <a href="https://www.tombow.com/en/">Tombow</a>
        <a href="https://www.nike.com/tr">Nike</a>
        </div>
        <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="../kullanıcı panel bölümü/ödemeler/app.jpg" alt="">
            <img src="../kullanıcı panel bölümü/ödemeler/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="../kullanıcı panel bölümü/ödemeler/pay.png" alt="">
        </div>
    </div>
    <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </div>
</footer>

    



    <script src="script.js"></script>
</body>

</html>