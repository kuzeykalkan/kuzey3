<?php

$kontrolpush = true;

// Kontrol değerini session'a kaydedin
session_start();
$_SESSION['kontrolpush'] = $kontrolpush;

// index.php'ye yönlendirin
header("Location: index.php");

?>