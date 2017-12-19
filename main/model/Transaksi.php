<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 19/12/2017
 * Time: 19:14
 */

class Transaksi
{
    function __construct()
    {
    }

    public static function bacaTransaksi($IDUsaha)
    {
        $db = DB::getInstance();
        $result = $db->query("SELECT t.IDTransaksi, t.Waktu, t.IDKatalog, kb.Nama, t.Banyak, t.Total FROM transaksi t JOIN katalog_barang kb ON t.IDKatalog = kb.IDKatalog WHERE IDUsaha = $IDUsaha");
        if ($result->rowCount() > 0) {
            foreach ($result as $item) {
                $output[] = array(
                    'IDTransaksi' => $item['IDTransaksi'],
                    'Waktu' => $item['Waktu'],
                    'IDKatalog' => $item['IDKatalog'],
                    'Nama' => $item['Nama'],
                    'Banyak' => $item['Banyak'],
                    'Total' => $item['Total']
                );
            }
            return $output;
        } else {
            return null;
        }
    }

    public static function tambahTransaksi()
    {
        $db = DB::getInstance();
        $db->query("INSERT INTO transaksi(IDTransaksi, IDPegawai, IDUsaha, Waktu, IDKatalog, Banyak, Total, Status) VALUES ( '', $IDPegawai, $IDUsaha, NOW(), $IDKatalog, $Banyak, '$Total', 'Belum Diverifikasi');");
    }

    public static function ubahTransaksi()
    {
        $db = DB::getInstance();
        $db->query("UPDATE transaksi SET Status = 'Telah Diverifikasi' WHERE IDTransaksi = $IDtransaksi");
    }

    public static function hapusTransaksi()
    {
        $db = DB::getInstance();
        $db->query("DELETE FROM transaksi");
    }
}