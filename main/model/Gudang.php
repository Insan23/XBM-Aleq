<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 19/12/2017
 * Time: 19:14
 */

class Gudang
{
    function __construct()
    {
    }

    public static function bacaGudang($IDUsaha)
    {
        $db = DB::getInstance();
        $db->query("SELECT IDGudang, IDKatalog, Jumlah FROM gudang WHERE IDUsaha = $IDUsaha");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'IDGudang' => $item['IDGudang'],
                    'IDKatalog' => $item['IDKatalog'],
                    'Jumlah' => $item['Jumlah']
                );
            }
            return $output;
        } else {
            return null;
        }
    }

    public static function tambahGudang()
    {
        $db = DB::getInstance();
        $db->query("INSERT INTO gudang(IDGudang, IDPegawai, IDUsaha, IDKatalog, Jumlah, Status) VALUES ('', $IDPegawai, $IDUsaha, $IDKatalog, $Jumlah, 'Ada');");
    }

    public static function dataKatalog($IDUsaha)
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT IDKatalog, Nama, Harga FROM katalog_barang k WHERE IDUsaha = '$IDUsaha'");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'IDKatalog' => $item['IDKatalog'],
                    'Nama' => $item['Nama'],
                    'Harga' => $item['Harga']
                );
            }
            return $output;
        } else {
            return null;
        }
    }

    public static function tambahKatalog($IDUsaha, $Kode, $Nama, $Harga, $Keterangan)
    {
        $db = DB::getInstance();
        $db->query("INSERT INTO katalog_barang VALUES ('', '$IDUsaha', '', '$Nama', '$Harga', '$Keterangan');");
    }

    public static function ubahKatalog($IDKatalog, $Kode, $Nama, $Harga, $Keterangan)
    {
        $db = DB::getInstance();
        $db->query("UPDATE katalog_barang SET Kode = '$Kode', Nama = '$Nama', Harga = '$Harga', Keterangan = '$Keterangan' WHERE IDKatalog = $IDKatalog;");
    }

    public static function hapusKatalog($IDKatalog)
    {
        $db = DB::getInstance();
        $db->query("DELETE FROM katalog_barang WHERE IDKatalog = $IDKatalog;");
    }

}