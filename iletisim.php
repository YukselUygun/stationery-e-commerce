<?php include "baglanti.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://kit.fontawesome.com/d755b7edb1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./iletisim.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img style="width: 30%;" src="../Listele/logolar/a (5).png" class="logo" alt=""></a>
        
        <div>
            <ul id="navbar">
                <li><a  href="anasayfa.php">Anasayfa</a></li>
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
            <a href="../../iletişim/iletişim sayfası/iletisim.html"><i class="fa-solid fa-phone"></i></a>
            <a href="../../alışveriş sepeti/sepet.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
            
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h1 class="title">İletişim Sayfası</h1>
            <div class="contact-area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cont-left">
                            <div class="cont-top">
                                <div class="cont-element">
                                    <i class="far fa-address-card"></i>
                                    <address>Üsküdar/İstanbul</address>
                                </div>
                                <div class="cont-element">
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:Arzumkirtasiye@gmail.com">Arzumkirtasiye@gmail.com</a>
                                </div>
                                <div class="cont-element">
                                    <i class="fas fa-phone-alt"></i>
                                    <a href="tel:+1234567890">555 555 55 55</a>
                                </div>
                            </div>
                            <div class="cont-bottom">
                                <a href="#"><i class="fab fa-facebook-f"></i></a> 
                                <a href="#"><i class="fab fa-twitter"></i></a> 
                                <a href="#"><i class="fab fa-instagram"></i></a> 
                                <a href="#"><i class="fab fa-linkedin-in"></i></a> 
                            </div>
                            <iframe class="map"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12042.896127300184!2d29.0810312!3d41.0094131!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac87a7644e7cd%3A0x7aa4c16d8d63fff2!2sArzum%20K%C4%B1rtasiye!5e0!3m2!1str!2str!4v1703936907938!5m2!1str!2str" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                       
                    </div>
                    
                  
                </div>
               
                <div class="cont-right">
                    <form action="">
                        <input type="text" name="text" id="text" placeholder="Ad-Soyad">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <textarea name="message" id="message" rows="10" placeholder="Mesaj"></textarea>
                        <button>Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col1">
            <div class="col">
                <img class="logo" src="../Listele/logolar/a (3).png">
                <h4 style="font-size: 20px;">İletişim</h4>
                <h4 class="col-text"><strong>Adres: </strong>Cumhuriyet mah. Kadribey sok. Üsküdar-İstanbul</h4>
                <h4 class="col-text"><strong>Tel No:</strong>(0216) 443 48 37</h4>
                <h4 class="col-text"><strong>Çalışma Saatleri:</strong> 07:00 - 20:00 </h4>
            </div>
            <div class="col">
            <h4 style="font-size: 20px;">Anlaşmalı Olduğumuz Kargolar</h4>
            <a href="https://www.yurticikargo.com/">Yurtiçi Kargo </a>
            <a href="https://www.mngkargo.com.tr/">MNG Kargo</a>
            <a href="https://www.ptt.gov.tr/">Ptt Kargo</a>
            <a href="https://www.suratkargo.com.tr/">Sürat Kargo</a>
            <a href="https://www.araskargo.com.tr/">Aras Kargo</a>
            </div>
            <div class="col">
            <h4 style="font-size: 20px;">Anlaşmalı Olduğumuz Firmalar </h4>
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
            <h4 style="font-size: 20px;">Install App</h4>
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
            <h4 style="font-size: 20px;">Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </footer>

<script src="../../script.js"></script>
   
</body>
</html>