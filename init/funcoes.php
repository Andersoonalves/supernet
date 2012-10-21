<?php
session_start();

$_SESSION['estado'] = $_POST['listEstados'];
$_SESSION['cidade'] = $_POST['listCidades'];

header("Location:../index.php");
?>