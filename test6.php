<?php

$kontrol = true;

// Kontrol değerini session'a kaydedin
session_start();
$_SESSION['kontrol'] = $kontrol;

// index.php'ye yönlendirin
header("Location: index.php");
    
?>