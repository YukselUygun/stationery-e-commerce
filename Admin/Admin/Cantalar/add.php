<?php
    include 'navbar.php';
    if(isset($_POST['submit'])){
        if($_POST['onay'] == 'on'){
            $_POST['onay'] = 1;
        }else{
            $_POST['onay'] = 0;
        }
        $table = 'cantalar';
        $sorgu = $db->prepare("INSERT INTO $table SET
            baslik = ?,
            icerik = ?,
            detay = ?,
            fiyat = ?,
            resim_url = ?,
            onay = ?
        ");
        $ekle = $sorgu->execute([
            $_POST['baslik'],
            $_POST['icerik'],
            $_POST['detay'],
            $_POST['fiyat'],
            $_POST['resim'],
            $_POST['onay']
        ]);
        if(isset($ekle)){
            header('Location:index.php');
        }else{
            echo '<script language="javascript">alert(bir hata meydana geldi)</script>';
        }
    }
?>
    <h1 class="whereiam">ÇANTA EKLEME SAYFASI</h1>
    <form action="" method="post" class="myForm">
        <fieldset>
            <legend>ÇANTA EKLE</legend>
            <input type="text" name="baslik" placeholder="Başlık..">
            <input type="text" name="icerik" placeholder="İçerik..">
            <textarea name="detay" placeholder="Detay.."></textarea>
            <input style="border:1px solid lightdark " type="number" name="fiyat" placeholder="Fiyat..">
            <input type="file" name="resim" placeholder="Resim..">
            <label><input type="checkbox" name="onay"> Onay</label>
            <input type="hidden" name="submit">
            <button type="submit" class="btn theme-btn">EKLE</button>
        </fieldset>
    </form>
<?php include 'footer.php'; ?>