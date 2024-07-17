<?php
    include_once 'db_connect.php';
    if(!isset($_GET['id']) || empty($_GET['id'])){
        header('Location:index.php');
        exit;
    }
    $table = 'kalemler';
    $sorgu = $db->prepare("DELETE FROM $table WHERE id = ?");
    $sil = $sorgu->execute([$_GET['id']]);
    if(isset($sil)){
        header('Location:index.php');
    }else{
        echo '<script language="javascript">alert(bir hata meydana geldi)</script>';
    }
