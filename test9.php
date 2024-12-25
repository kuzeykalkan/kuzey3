<?php

$kontrol3 = true;

// Kontrol değerini session'a kaydedin
session_start();
$_SESSION['kontrol3'] = $kontrol3;

// index.php'ye yönlendirin
header("Location: index.php");

?>