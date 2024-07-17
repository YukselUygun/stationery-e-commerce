<?php  
    if(!isset($_GET['id']) || empty($_GET['id'])){
        header('Location:index.php');
        exit;
    }
    include 'navbar.php';
    
    $table = 'anasayfa';
    $sorgu = $db->prepare("SELECT * FROM $table WHERE id = ?");
    $sorgu->execute([$_GET['id']]);
    $data = $sorgu->fetch(PDO::FETCH_ASSOC);
    if($_GET['id'] != $data['id']){
        header('Location:index.php');
        exit;
    }
    if(isset($_POST['submit'])){
        if($_POST['onay'] == 'on'){
            $_POST['onay'] = 1;
        }else{
            $_POST['onay'] = 0;
        }
    $guncelleSorgu = $db->prepare("UPDATE $table SET
        baslik = ?,
        icerik = ?,
        detay = ?,
        fiyat = ?,
        resim_url = ?,
        onay = ? WHERE id = ?
    ");
    $guncelle = $guncelleSorgu->execute([
        $_POST['baslik'],
        $_POST['icerik'],
        $_POST['detay'],
        $_POST['fiyat'],
        $_POST['resim'],
        $_POST['onay'],
        $_GET['id']
    ]);
    if(isset($guncelle)){
        header('Location:index.php');
    }else{
        echo '<script language="javascript">alert(bir hata meydana geldi)</script>';
    }
}
?>
    <h1 class="whereiam">BLOG GÜNCELLEME SAYFASI - <?=$_GET['id']?></h1>
    <form action="" method="post" class="myForm">
        <fieldset>
        <legend>KİTAP GÜNCELLE</legend>
            <input type="text" name="baslik" placeholder="Başlık.." value="<?=$data['baslik']?>">
            <input type="text" name="icerik" placeholder="İçerik.." value="<?=$data['icerik']?>">
            <textarea name="detay" placeholder="Detay.."><?=$data['detay']?></textarea>
            <input type="number" name="fiyat" placeholder="Fiyat.." value="<?=$data['fiyat']?>">
            <input type="file" name="resim" placeholder="Resim.." value="<?=$data['resim_url']?>">
            <label><input type="checkbox" name="onay" <?= ($data['onay'] == 1) ? 'checked' : null ?>> Onay</label>
            <input type="hidden" name="submit">
            <button type="submit" class="btn theme-btn">GÜNCELLE</button>
        </fieldset>
    </form>
<?php include 'footer.php'; ?>