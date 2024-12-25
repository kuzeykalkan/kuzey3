<?php

$kontrol6 = true;

// Kontrol değerini session'a kaydedin
session_start();
$_SESSION['kontrol6'] = $kontrol6;

// index.php'ye yönlendirin
header("Location: index.php");

?>