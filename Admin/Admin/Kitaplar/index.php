<?php
    include 'navbar.php';
    $table = 'kitaplar';
    $datas = $db->query("SELECT * FROM $table ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
    <h1 class="whereiam">ANA SAYFA</h1>
    <ul class="data-list">
        <?php foreach($datas as $data): ?>
        <li>
            <span><?=$data['icerik']?></span>
            <?= ($data['onay'] == 1) ? "<a href=\"read.php?id=" . $data['id'] . "\"class=\"btn read-btn\">OKU</a>" : null  ?>
            <a href="update.php?id=<?=$data['id']?>" class="btn update-btn">GÜNCELLE</a>
            <a href="delete.php?id=<?=$data['id']?>" class="btn delete-btn">SİL</a>
        </li>
        <?php endforeach; ?>
    </ul>
<?php include 'footer.php'; ?>