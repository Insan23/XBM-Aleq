<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 19/12/2017
 * Time: 19:45
 */

class ControlPengguna
{
    function __construct()
    {
    }

    public function cek_bisnis()
    {
        $cek = Pengguna::cekBisnis($_POST['namausaha']);
        echo $cek;
    }

    public function daftar_individu()
    {
        //$Nama, $Alamat, $Email, $NamaPemilik, $AlamatPemilik, $TempatLahir, $TanggalLahir, $Password, $Tipe)
        Pengguna::registerIndividu(
            $_POST['NamaUsaha'],
            $_POST['AlamatUsaha'],
            $_POST['Email'],
            $_POST['NamaPemilik'],
            $_POST['AlamatPemilik'],
            $_POST['TempatLahir'],
            $_POST['TanggalLahir'],
            $_POST['Password'],
            $_POST['Tipe']
        );
    }

    public function daftar_kelompok()
    {

    }
}

?>