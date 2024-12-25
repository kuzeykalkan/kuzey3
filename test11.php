<?php

$kontrol5 = true;

// Kontrol değerini session'a kaydedin
session_start();
$_SESSION['kontrol5'] = $kontrol5;

// index.php'ye yönlendirin
header("Location: index.php");

?>