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
        $result = $db->query("SELECT * FROM profil_usaha WHERE NamaUsaha = '$Nama';");
        if ($result->rowCount() > 0) {
            return "Telah Dipakai";
        } else {
            return "Tersedia";
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
        if ($Username == 'admin@xbm.com') {
            $result = $db->query("SELECT *  FROM pengguna WHERE NamaPengguna = '$Username' AND KataSandi = '$Password';");
            if (count($result) == 1) {
                return "Admin";
            } else {
                return null;
            }
        } else {
            $result = $db->query("SELECT pu.NamaUsaha, p.IDUsaha, pp.IDPegawai, pp.Nama, p.Tingkatan  FROM pengguna p JOIN profil_pegawai pp ON p.IDPengguna = pp.IDPengguna JOIN profil_usaha pu ON p.IDUsaha = pu.IDUsaha WHERE p.NamaPengguna = '$Username' AND p.KataSandi = '$Password';");
            if (count($result) == 1) {
                foreach ($result as $item) {
                    $output = array(
                        'IDUsaha' => $item['IDUsaha'],
                        'NamaUsaha' => $item['NamaUsaha'],
                        'IDPegawai' => $item['IDPegawai'],
                        'Nama' => $item['Nama'],
                        'Tingkatan' => $item['Tingkatan']
                    );
                }
                return $output;
            } else {
                return null;
            }
        }
    }

    public static function registerIndividu($Nama, $Alamat, $Email, $NamaPemilik, $AlamatPemilik, $TempatLahir, $TanggalLahir, $Password, $Tipe)
    {
        $db = DB::getInstance();
        $db->exec("INSERT INTO profil_usaha VALUES ( '', '$Nama', '$Alamat', NOW(), '$Email', 'Ada', '$Tipe');");
        $idUsaha = $db->lastInsertId();
        $db->exec("INSERT INTO pengguna VALUES ( '', '$Email', '$Password', 'Pemilik', '$idUsaha');");
        $idPengguna = $db->lastInsertId();
        $result = $db->exec("INSERT INTO profil_pegawai VALUES ( '', '$NamaPemilik', '$AlamatPemilik', '$TempatLahir', '$TanggalLahir', '$idPengguna', 'Bekerja');");
        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function registerKelompok($Nama, $Alamat, $Email, $Email1, $Email2, $Email3, $NamaPemilik, $Nama1, $Nama2, $Nama3, $AlamatPemilik, $Alamat1, $Alamat2, $Alamat3, $TempatLahir, $TempatLahir1, $TempatLahir2, $TempatLahir3, $TanggalLahir, $TanggalLahir1, $TanggalLahir2, $TanggalLahir3, $Password, $Password1, $Password2, $Password3, $Tipe)
    {
        $db = DB::getInstance();
        $db->exec("INSERT INTO profil_usaha VALUES ( '', '$Nama', '$Alamat', NOW(), '$Email', 'Ada', '$Tipe');");
        $idUsaha = $db->lastInsertId();

        $db->exec("INSERT INTO pengguna VALUES ( '', '$Email', '$Password', 'Pemilik', '$idUsaha');");
        $idPengguna = $db->lastInsertId();
        $result = $db->exec("INSERT INTO profil_pegawai VALUES ( '', '$NamaPemilik', '$AlamatPemilik', '$TempatLahir', '$TanggalLahir', '$idPengguna', 'Bekerja');");

        $db->exec("INSERT INTO pengguna VALUES ( '', '$Email1', '$Password1', 'Pengelola Transaksi', '$idUsaha');");
        $idPengguna = $db->lastInsertId();
        $result = $db->exec("INSERT INTO profil_pegawai VALUES ( '', '$Nama1', '$Alamat1', '$TempatLahir1', '$TanggalLahir1', '$idPengguna', 'Bekerja');");


        $db->exec("INSERT INTO pengguna VALUES ( '', '$Email2', '$Password2', 'Pengelola Gudang', '$idUsaha');");
        $idPengguna = $db->lastInsertId();
        $result = $db->exec("INSERT INTO profil_pegawai VALUES ( '', '$Nama2', '$Alamat2', '$TempatLahir2', '$TanggalLahir2', '$idPengguna', 'Bekerja');");


        $db->exec("INSERT INTO pengguna VALUES ( '', '$Email3', '$Password', 'Pengelola Keuangan', '$idUsaha');");
        $idPengguna = $db->lastInsertId();
        $result = $db->exec("INSERT INTO profil_pegawai VALUES ( '', '$Nama3', '$Alamat3', '$TempatLahir3', '$TanggalLahir3', '$idPengguna', 'Bekerja');");
        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>