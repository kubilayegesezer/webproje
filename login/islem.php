<?php
ob_start();
session_start();

require 'baglan.php';
function Go($url, $time = 0)
{
    if ($time != 0) {
        header("Refresh: $time; url=$url");
    } else {
        header("Location: $url");
    }
}


if(isset($_POST['kayit'])){
    $studentnumber = $_POST['studentnumber'];
    $password = $_POST['password'];
    $password_again = @$_POST['password_again'];

    if(!$studentnumber){
        echo "LÜTFEN ÖĞRENCİ NUMARANIZI GİRİNİZ";
    }elseif(!$password || !$password_again){
        echo "LÜTFEN ŞİFRENİZİ GİRİNİZ";
    }elseif($password != $password_again){
        echo "GİRDİĞİNİZ ŞİFRELER UYUŞMUYOR";
    }else{
        //veritabanı kayıt işlemi
        $sorgu = $db->prepare('INSERT INTO users SET user_no = ?, user_password = ?');
        $ekle = $sorgu->execute([
            $studentnumber, $password]);
            if($ekle){
                echo "Kayıt Başarıyla Gerçekleşti Yönlendiriliyorsunuz.";
                header('refresh:2; index.php');
            }else{
                echo "Bir hata oluştu tekrar kontrol edin";
            }
            

    }

    
}
if(isset($_POST['giris'])){
    $studentnumber = $_POST['studentnumber'];
    $password = $_POST['password'];

    if(!$studentnumber){
        echo "ÖĞRENCİ NUMARANIZI GİRİNİZ";
    }elseif(!$password){
        echo "ŞİFRENİZİ GİRİNİZ";
    } else{
        $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_no = ? && user_password = ?');
        $kullanici_sor->execute([
            $studentnumber, $password]);
             $say = $kullanici_sor->rowCount();
             var_dump($kullanici_sor->fetchAll(PDO::FETCH_ASSOC));
            if($say==1){
                $_SESSION['studentnumber']=$studentnumber;
                echo "GİRİŞ YAPILDI YÖNLENDİRİLİYORSUNUZ.";
                
               Go("anasayfa.php");
                
            }
    }
}



?>
