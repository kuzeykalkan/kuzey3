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

// Veri alma
$plugin = "rewards"; // Eklenti adı
$setting = "newAccountFreeCredit"; // Ayar adı
$value =  $_POST["amount"]; // Ayar değeri

// Veritabanına veri ekleme
$sql = "UPDATE `plugins_settings_values` SET `setting_val` = '$value' WHERE `plugin` = '$plugin' AND `setting` = '$setting'";


if ($conn->query($sql) === TRUE) {
    echo "Ayar başarıyla eklendi";
} else {
    echo "Hata: " . $conn->error;
}

// Bağlantıyı kapatma
$conn->close();

?>
