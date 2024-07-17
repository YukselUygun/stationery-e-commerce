<?php include "baglanti.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arzum Kırtasiye</title>
    <link rel="stylesheet" href="Anasayfa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    
   <section id="header">
        <a href="#"><img style="width: 30%;" src="../Listele/logolar/a (5).png" class="logo" alt=""></a>
        
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
                <li class="active" id="lg-bag"><a href="iletisim.php"><i class="fa-solid fa-phone"></i></a></li>
                <li id="lg-bag"><a href="sepet.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="iletişim/iletişim sayfası/iletisim.html"><i class="fa-solid fa-phone"></i></a>
            <a href="alışveriş sepeti/sepet.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img style="height: 450px; width: 200px; ;" src="../Listele/KampanyaArkaplan/Kanpanya2.png" class="d-block w-100" alt="Kanpanya">
              </div>
              <div class="carousel-item">
                <img style="height: 450px; width: 200px; ;" src="../Listele/KampanyaArkaplan/Kanpanya3.png" class="d-block w-100" alt="Kanpanya">
              </div>
              <div class="carousel-item">
                <img style="height: 450px; width: 200px; ;" src="../Listele/KampanyaArkaplan/Kanpanya4.jpg" class="d-block w-100" alt="Kanpanya">
              </div>
            </div>
           <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    <section id="banner" class="section-m1">
        <h4 style="color: #dc143c;font-size:50px ;" >Okul Açılış Sezonununa Özel</h4>
        <div class="discount">
            <div>
                <h2>KAÇIRILMAYACAK  <span style="font-size:100px ;" id="dis">70%</span>'E VARAN İNDİRİMLER</h2>
            </div>
           
        </div>
        
    </section>

    <h2 id="product2" style="font-family: 'Kaushan Script', cursive;"> Bizi Diğerlerinden Farklı Kılan </h2>

    <section id="feature" class="section-p1">

     <div style="border-radius: 20px;" class="fe-box ">
            <img src="../Listele/küçükResimler/indir-removebg.png">
            <h6>Güvenli Kargo</h6>
        </div>

        <div style="border-radius: 20px;" class="fe-box ">
            <img src="../Listele/küçükResimler/pngtree-fast-delivery-icon-png-image_6368566-removebg-preview.png" style="width: 120px;">
            <h6>Hızlı Teslimat</h6>
        </div>

        <div style="border-radius: 20px;" class="fe-box ">
            <img src="../Listele/küçükResimler/pngtree-save-money-flat-icon-png-image_9149279.png" style="width: 120px;">
            <h6>Para Tasarrufu</h6>
        </div>

        <div style="border-radius: 20px;" class="fe-box ">
            <img src="../Listele/küçükResimler/indir-removebg-preview.png" style="width: 80px;">
            <h6>Kampanyalar</h6>
        </div>

        <div style="border-radius: 20px;" class="fe-box ">
            <img src="../Listele/küçükResimler/pngtree-removebg-prev.png" style="width: 120px;">
            <h6>Düşük Ücret</h6>
        </div>

        <div style="border-radius: 20px;" class="fe-box ">
            <img src="../Listele/küçükResimler/destek_hattı-removebg-preview.png" style="width: 120px;">
            <h6>7/24 Destek Hattı</h6>
        </div>

    </div>
    </section>

    
    <section id="product1" class="section-p1">
        <h2 style="font-family: 'Kaushan Script', cursive;">Çok Satanlar</h2>
        <div class="pro-container">

        
        <?php
    $table = 'anasayfa';
    $datas = $db->query("SELECT * FROM $table ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);
    ?>
     <?php foreach($datas as $data): ?>

            <div class="pro">
                <img style="height: 300px;"  src="../Listele/Ürünler/<?= $data['resim_url']?>" alt="kitap">
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
                <a href="detaylar.php?id=<?=$data['id']?>" class="cart"><i class="fa-solid fa-cart-shopping "></i></a>
            </div>
            <?php endforeach; ?>
     </div>
     </section>
     <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Büyük Kampanya !</h4>
            <h2>3 kitap alana 1 kitap BEDAVA </h2>
            <span><strong>En iyi kitaplar sadece burada.</strong></span>
            <button class="white">Daha Fazla</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Büyük Kampanya !</h4>
            <h2>2 kalem alana 1 defter BEDAVA </h2>
            <span>Kaliteli kalemlerin tek adresi.</span>
            <button class="white">Daha fazla</button>
        </div>
    
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2 style="color: black;">Aralık Ayı İndirimi</h2>
            <h3 style="color: black;">Aralık ayı harcamalarına özel %15 indirim</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>Boya Ürünleri İndirimi</h2>
            <h3 style="color: aliceblue;">Boya ürünlerinde %40 a varan indirim</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2 style="color: black;">10. Alışveriş Kazandırıyor. </h2>
            <h3>10. Alışverişinize %50 indirim </h3>
        </div> 
    </section>
    <footer class="section-p1">
        <div class="col1">
            <div class="col">
                <img class="logo" src="../Listele/logolar/logo-transparent.png">
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
    <script src="../kullanıcı panel bölümü/script.js"></script>
</body>
</html>