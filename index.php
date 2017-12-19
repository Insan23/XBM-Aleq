<?php
session_start();
require_once('koneksi.php');

if (isset($_GET['c']) && isset($_GET['f'])) {
    $controller = $_GET['c'];
    $action = $_GET['f'];
} else {
    $controller = 'ControlHalaman';
    $action = 'beranda';
}
require_once ('route.php');
?>
