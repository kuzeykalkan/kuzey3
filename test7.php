<?php

// Veritabanı bağlantısı için gerekli bilgiler
$servername = "localhost";
$database = "mimaslif_sondb";
$username = "mimaslif_sondb";
$password = "mucovix1177D";

// Güncellenecek kullanıcı ID'si
$userID = 4; // Örnek ID, gerçek ID ile değiştirin

// Yeni kredi değeri
$newCredits = 100; // Örnek değer, gerçek değer ile değiştirin

// Veritabanı bağlantısı
$connection = mysqli_connect($servername, $username, $password, $database);

// Hata kontrolü
if (!$connection) {
    die("Veritabanına bağlanırken hata oluştu: " . mysqli_connect_error());
}

// SQL sorgusu
$sql = "UPDATE users SET credits = $newCredits WHERE id = $userID";

// Sorguyu çalıştırma
if (mysqli_query($connection, $sql)) {
    echo "Kullanıcı kredisi başarıyla güncellendi.";
} else {
    echo "Kullanıcı kredisi güncellenemedi: " . mysqli_error($connection);
}

// Veritabanı bağlantısını kapatma
mysqli_close($connection);

?>
