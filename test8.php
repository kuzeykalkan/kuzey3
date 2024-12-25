<?php

$kontrol2 = true;

// Kontrol değerini session'a kaydedin
session_start();
$_SESSION['kontrol2'] = $kontrol2;

// index.php'ye yönlendirin
header("Location: index.php");

?>