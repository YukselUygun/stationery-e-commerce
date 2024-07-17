</tbody>
                </table>

                 <div class="butonKutu">
                    <div class="cardContainer">
                         
                        <button id="btn" class="btn btn-primary"> < Alışverişe Devam Et</button>
                        <button id="btnOdemeyiTamamla"  class="btn btn-success">Ödemeyi tamamla ></button>
                   </div>
                 </div>
                    
              
            </div>

            
        </div>
    </div>
    <footer class="section-p1">
        <div class="col1">
            <div class="col">
                <img class="logo" src="a (3).png">
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
                <img src="ödemeler/app.jpg" alt="">
                <img src="ödemeler/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="ödemeler/pay.png" alt="">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var btn=document.getElementById("btn");
    btn.addEventListener("click",Acilis)
    function Acilis(){
        window.location.href="../Anasayfa.html";
    }
</script>
<script>
    $(document).ready(function() {
        $('#btnOdemeyiTamamla').click(function() {
            $.ajax({
                type: 'POST',
                url: 'calculate_total.php',
                success: function(response) {
                    alert('Toplam Ödenecek Tutar: ' + response);
                },
                error: function() {
                    alert('Hata oluştu. Lütfen tekrar deneyin.');
                }
            });
        });
    });
</script>
</body>

</html>


