<?php
    include 'navbar.php';
    $table = 'defterler';
    $datas = $db->query("SELECT * FROM $table ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);
?>
    
    <ul class="data-list">
        <?php foreach($datas as $data): ?>
        <li>

            <h2 class="read-title"><?=$data['baslik']?></h2>
            <img style="witdh: 400px;height:400px;" class="read-content" src="./<?= $data['resim_url']?>" alt="batu.png">
            <p class="read-content"><?=$data['icerik']?></p>
            <p class="read-content"><?=$data['detay']?></p>
            <p class="read-content"><?=$data['fiyat']?></p>
        
        </li>
        <?php endforeach; ?>
    </ul>
<?php include 'footer.php'; ?>
