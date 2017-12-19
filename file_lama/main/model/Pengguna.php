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

    public static function login($Username, $Password)
    {
        $db = DB::getInstance();
        $Tingkatan = $db->query("SELECT Tingkatan FROM pengguna WHERE NamaPengguna = '$Username' AND KataSandi = '$Password';");
        if (count($Tingkatan) > 0) {
            foreach ($Tingkatan as $item) {
                $output = $item['Tingkatan'];
            }
            return $output;
        } else {
            return null;
        }
    }

    public static function register($Nama, $Alamat, $Tanggal, $Email, $Status, $NamaPemilik, $AlamatPemilik, $TempatLahir, $TanggalLahir, $Password)
    {
        $db = DB::getInstance();
        $db->query("INSERT INTO profilusaha VALUES('', '$Nama', '$Alamat', '$Tanggal', '$Email', '$Status', '')");
        $db->query("INSERT INTO pengguna VALUES('', '$Email', '$Password', 'Pemilik', (SELECT IDUsaha FROM profilUsaha WHERE Email = '$Email' AND NamaUsaha = '$Nama'));");
        $db->query("INSERT INTO profilpegawai VALUES('', '$NamaPemilik', '$AlamatPemilik', '$TempatLahir', '$TanggalLahir', (SELECT IDPengguna FROM pengguna WHERE NamaPengguna = '$Email' AND KataSandi = '$Password'), 'Bekerja');");
        $Tipe = $db->query("SELECT IDUsaha FROM profilUsaha WHERE Email = '$Email' AND NamaUsaha = '$Nama'");
        foreach ($Tipe as $item) {
            $output = $item['IDUsaha'];
        }
        return $output;
    }
    public static function registerTipe($Tipe, $IDUsaha)
    {
        $db = DB::getInstance();
        $db->query("UPDATE profilusaha SET Tipe = '$Tipe' WHERE IDUsaha = '$IDUsaha';");
    }
}