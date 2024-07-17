<?php
    if(!isset($_GET['id']) || empty($_GET['id'])){
        header('Location:index.php');
        exit;
    }
    
    include 'navbar.php';
    $table = 'defterler';
    $sorgu = $db->prepare("SELECT * FROM $table WHERE id = ?");
    $sorgu->execute([$_GET['id']]);
    $data =   $sorgu->fetch(PDO::FETCH_ASSOC);

    if($data['onay'] != 1 || $data['id'] != $_GET['id']){
        header('Location:index.php');
        exit;
    }
?>
    <h1 class="whereiam">İÇERİK SAYFASI - <?=$_GET['id']?></h1>
    <section id="read-section">
        <h2 class="read-title"><?=$data['baslik']?></h2>
        <img style="witdh: 400px;height:400px;" class="read-content" src="../../../../Listele/defterler/<?= $data['resim_url']?>" alt="batu.png">
        <p class="read-content"><?=$data['icerik']?></p>
        <p class="read-content"><?=$data['detay']?></p>
        <p class="read-content"><?=$data['fiyat']?></p>
    </section>
<?php include 'footer.php'; ?>