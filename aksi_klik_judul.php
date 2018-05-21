<?php
session_start();
$_SESSION['judul'] = $_GET['judul'];
header('location:detail_artikel.php');
?>