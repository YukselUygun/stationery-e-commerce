<?php
    include_once 'baglanti.php';
    if(!isset($_GET['id']) || empty($_GET['id'])){
        header('Location:sepet.php');
        exit;
    }
    $table = 'sepet';
    $sorgu = $db->prepare("DELETE FROM $table WHERE id = ?");
    $sil = $sorgu->execute([$_GET['id']]);
    if(isset($sil)){
        header('Location:sepet.php');
    }else{
        echo '<script language="javascript">alert(bir hata meydana geldi)</script>';
    }