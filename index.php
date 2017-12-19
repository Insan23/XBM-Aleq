<?php
session_start();
require_once('koneksi.php');

if (isset($_GET['c']) && isset($_GET['f'])) {
    $controller = $_GET['c'];
    $action = $_GET['f'];
} else {
    $controller = 'controlHalaman';
    $action = 'home';
}
require_once('main/layout_all.php');
?>
