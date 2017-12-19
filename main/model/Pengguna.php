<?php
/**
 * Created by PhpStorm.
 * User: Ji
 * Date: 14/12/2017
 * Time: 12:26
 */

class Pengguna
{
    function __construct()
    {
    }

    public static function cekBisnis($Nama)
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT * FROM profil_bisnis WHERE NamaBisnis = '$Nama';");
        if (count($result) > 0) {
            return "Nama Telah Dipakai";
        } else {
            return "Nama Tersedia";
        }
    }

    public static function cekUsername($Email)
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT * FROM pengguna WHERE NamaPengguna = '$Email';");
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function login($Username, $Password)
    {
        $db = DB::getInstance();
        $Tingkatan = $db->query("");
    }

    public static function register($Nama, $Alamat, $Email, $Status, $NamaPemilik, $AlamatPemilik, $TempatLahir, $TanggalLahir, $Password, $Tipe)
    {
        $db = DB::getInstance();
        $db->exec("INSERT INTO profil_usaha(IDUsaha, NamaUsaha, Alamat, TanggalDaftar, Email, Status, Tipe) VALUES ( '', '$Nama', '$Alamat', NOW(), '$Email', 'Ada', '$Tipe');");
        $idUsaha = $db->lastInsertId();
        $db->exec("INSERT INTO pengguna(IDPengguna, NamaPengguna, KataSandi, Tingkatan, IDUsaha) VALUES ( '', '$Email', '$Password', 'Pemilik', '$idUsaha');");
        $idPengguna = $db->lastInsertId();
        $result = $db->exec("INSERT INTO profil_pegawai(IDPegawai, Nama, Alamat, TempatLahir, TanggalLahir, IDPengguna, Status) VALUES ( '', '$NamaPemilik', '$AlamatPemilik', '$TempatLahir', '$TanggalLahir', '$idPengguna', 'Bekerja');");
        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>