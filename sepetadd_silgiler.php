<?php
include "baglanti.php"; // Veritabanı bağlantısını yap

if (isset($_GET['id'])) {
    $urun_id = $_GET['id'];
    
    // Veritabanından ürünü çek
    $sorgu = $db->prepare("SELECT * FROM silgiler WHERE id = ?");
    $sorgu->execute([$urun_id]);
    $urun = $sorgu->fetch(PDO::FETCH_ASSOC);

    if ($urun) {
        // Ürünü sepete ekle
        $sorgu = $db->prepare("INSERT INTO sepet (baslik, icerik, detay, fiyat, resim_url) VALUES (?, ?, ?, ?, ?)");
        $sorgu->execute([
            $urun['baslik'],
            $urun['icerik'],
            $urun['detay'],
            $urun['fiyat'],
            $urun['resim_url'],
            // Varsayılan olarak onay değerini 1 olarak belirliyoruz
        ]);
        header('Location: sepet.php'); // Sepet sayfasına yönlendir
        exit;
    } else {
        echo "Ürün bulunamadı.";
    }
} else {
    echo "Ürün ID'si belirtilmedi.";
}
?>
