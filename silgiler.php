<?php include "baglanti.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arzum Kırtasiye</title>
    <link rel="stylesheet" href="silgi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    
    <section id="header">
        <a href=""><img style="width: 30%;" src="../Listele/silgiler/a (5).png" class="logo" alt=""></a>
        
        <div>
            <ul id="navbar">
                <li><a  href="Anasayfa_listele.php">Anasayfa</a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li><a  href="kitaplar.php">Kitaplar</a></li>
                <li><a href="defterler.php">Defterler</a></li>
                <li><a href="kalemler.php">Kalemler</a></li>
                <li><a  href="silgiler.php">Silgiler</a></li>
                <li><a href="kalemtıraşlar.php">Kalemtraşlar</a></li>
                <li><a href="çantalar.php">Çantalar</a></li>
                <li><a href="boyalar.php">Boyalar</a></li>
                <li class="active" id="lg-bag"><a href="iletisim.php"><i class="fa-solid fa-phone"></i></a></li>
                <li id="lg-bag"><a href="sepet.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="../iletişim/iletişim sayfası/iletisim.html"><i class="fa-solid fa-phone"></i></a>
            <a href="../alışveriş sepeti/sepet.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
            
        </div>
    </section>

    
    <section id="product1" class="section-p1">
    <h2>Sınav,Tahta Silgileri</h2>
    <div class="pro-container">
    <?php
    $table = 'silgiler';
    $datas = $db->query("SELECT * FROM $table ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);
    ?>
      
      <?php foreach($datas as $data): ?>
            <div   class="pro">
                <img src="../Listele/silgiler/<?= $data['resim_url']?>" alt="">
                <div class="des">
                    <span><?=$data['baslik']?></span>
                    <h5><?=$data['icerik']?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₺<?=$data['fiyat'] ?></h4>
                </div>
                <a href="detaylar_silgi.php?id=<?=$data['id']?>" class="cart"><i class="fa-solid fa-cart-shopping "></i></a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <footer class="section-p1">
        <div class="col1">
            <div class="col">
                <img class="logo" src="../Listele/silgiler/a (3).png">
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
                <img src="../Listele/ödemeler/app.jpg" alt="">
                <img src="../Listele/ödemeler/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="../Listele/ödemeler/pay.png" alt="">
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


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>