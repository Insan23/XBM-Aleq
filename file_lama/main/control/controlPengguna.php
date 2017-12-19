<?php
/**
 * Created by PhpStorm.
 * User: Ji
 * Date: 14/12/2017
 * Time: 12:47
 */

class controlPengguna
{
    function __construct()
    {
    }

    public function masuk()
    {
        if (Pengguna::login($_POST['Email'], $_POST['Password']) == 'Pengelola') {
            //menuju halaman pengelola (transaksi)
        } else if (Pengguna::login($_POST['Email'], $_POST['Password']) == 'Pemilik') {
            header("location: index.php?c=controlHalaman&f=kelompok_pengelola");
            //menuju halaman pemilik (home pemilik)
        } else if (Pengguna::login($_POST['Email'], $_POST['Password']) == 'Gudang') {

        } else if (Pengguna::login($_POST['Email'], $_POST['Password']) == 'Keuangan') {
            //menuju halaman kelompok keuangan
        }
    }

    public function daftarUsaha()
    {
        $NamaUsaha = $_POST['NamaUsaha'];
        $Alamat = $_POST['AlamatUsaha'];
        $Tanggal = date("Y-m-d");
        $NamaPemilik = $_POST['NamaPemilik'];
        $AlamatPemilik = $_POST['AlamatPemilik'];
        $TempatLahir = $_POST['TempatLahir'];
        $TanggalLahir = $_POST['TanggalLahir'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $_SESSION['ID'] = Pengguna::register($NamaUsaha, $Alamat, $Tanggal, $Email, 'Ada', $NamaPemilik, $AlamatPemilik, $TempatLahir, $TanggalLahir, $Password);
        header("location: index.php?c=controlHalaman&f=halaman_daftar_tipe");
//        require_once('main/pages/daftar-2.php');

    }
    public function daftarTipe()
    {
        $Tipe = $_POST['Tipe'];
        Pengguna::registerTipe($Tipe, $_SESSION['ID']);
        header("location: index.php?c=controlHalaman&f=halaman_masuk");
    }
}