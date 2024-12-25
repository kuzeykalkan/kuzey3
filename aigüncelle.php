<?php

// Veritabanı bağlantısı kurma
$dbhost = "localhost";
$dbusername = "kissmeet_kismeet";
$dbpassword = "mucovix1177D";
$dbname = "kissmeet_kismeet";

// Bağlantıyı kontrol etme
$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Bağlantı kurulamadı: " . $conn->connect_error);
}

// Yeni değer (isteğe göre değiştirebilirsiniz)
$newValue =  $_POST["amount2"]; 

// Veritabanı sorgusu
$sql = "UPDATE `plugins_settings` 
        SET `setting_val` = '$newValue' 
        WHERE `plugin` = 'aiautoresponder' 
          AND `setting` = 'responder_mood'" ;
         

// Sorgunun çalıştırılması
if ($conn->query($sql) === TRUE) {
    echo "Ayar başarıyla güncellendi";
} else {
    echo "Hata: " . $conn->error;
}

// Bağlantıyı kapatma
$conn->close();

?>
