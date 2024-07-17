<?php
include 'baglanti.php'; // Veritabanı bağlantı dosyanızı buraya dahil edin

// Sepetteki ürünlerin toplam fiyatını hesapla
$table = 'sepet';
$stmt = $db->query("SELECT SUM(fiyat) AS total FROM $table");
$total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

// JSON formatında toplamı döndür
echo json_encode($total);
?>