<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 19/12/2017
 * Time: 19:44
 */

class ControlHalaman
{
    function __construct()
    {
    }

    public function beranda()
    {
        require_once('main/pages/home.php');
    }

    public function halaman_masuk()
    {
        require_once('main/pages/login.php');
    }

    public function halaman_daftar()
    {
        require_once('main/pages/daftar.php');
    }

    public function pemilik_berandak()
    {
        require_once('main/pages/kelompok/pemilik_beranda.php');
    }

    public function gudang_beranda()
    {
        require_once('main/pages/kelompok/gudang_beranda.php');
    }

    public function keuangan_beranda()
    {
        require_once('main/pages/kelompok/keuandan_beranda.php');
    }

    public function transaksi_beranda()
    {
        require_once('main/pages/kelompok/transaksi_beranda.php');
    }

    public function transaksi_daftar_transaksi()
    {
        $data_katalog = Gudang::dataKatalog($_SESSION['IDUsaha']);
        $data_transaksi = Transaksi::bacaTransaksi($_SESSION['IDUsaha']);
        require_once('main/pages/kelompok/transaksi_daftar_transaksi.php');
    }

    public function admin_beranda()
    {
        require_once('main/pages/admin/beranda.php');
    }
}

?>