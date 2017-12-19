<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 19/12/2017
 * Time: 19:13
 */

class Keuangan
{
    function __construct()
    {
    }

    public static function bacaKeuangan($IDUsaha)
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT IDKeuangan, Tanggal, Tipe, Total, Untuk, Saldo FROM keuangan WHERE IDUsaha = $IDUsaha");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'IDKeuangan' => $item['IDKeuangan'],
                    'Tanggal' => $item['Tanggal'],
                    'Tipe' => $item['Tipe'],
                    'Total' => $item['Total'],
                    'Untuk' => $item['Untuk'],
                    'Saldo' => $item['Saldo']
                );
            }
            return $output;
        } else {
            return null;
        }
    }

    public static function tambahKeuangan()
    {
        $db = DB::getInstance();
        $db->query("INSERT INTO keuangan(IDKeuangan, IDPegawai, IDUsaha, Tanggal, Tipe, Total, Untuk, Saldo) VALUES ('', $IDPegawai, $IDUsaha, CURDATE(), '$Tipe', '$Total', '$Untuk', '$Saldo', 'Ada');");
    }

    public static function ubahKeuangan()
    {
        $db = DB::getInstance();
        $db->query("");
    }

    public static function hapusKeuangan()
    {
        $db = DB::getInstance();
        $db->query("");
    }
}

?>