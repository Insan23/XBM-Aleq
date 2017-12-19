<?php
/**
 * Created by PhpStorm.
 * User: Ji
 * Date: 14/12/2017
 * Time: 12:31
 */

class controlHalaman
{
    function __construct()
    {
    }

    public function home()
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

    public function halaman_daftar_tipe()
    {
        require_once('main/pages/daftar-2.php');
    }

    public function halaman_tentang()
    {
        require_once('main/pages/tentang.php');
    }
}

?>