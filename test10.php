<?php

$kontrol4 = true;

// Kontrol değerini session'a kaydedin
session_start();
$_SESSION['kontrol4'] = $kontrol4;

// index.php'ye yönlendirin
header("Location: index.php");

?>