<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 19/12/2017
 * Time: 19:45
 */

class ControlGudang
{
    function __construct()
    {
    }

    public function data_katalog()
    {

//        if ($data != null) {
//            if ($_POST['Tipe'] == 'tabel') {
//                $output = "
//                    <table>
//                        <thead>
//                        <tr>
//                        <td>No</td>
//                        <td>Nama</td>
//                        <td>Harga</td>
//                        </tr>
//                        </thead>
//                        <tbody>
//                        ";
//
//                foreach ($data as $item) {
//                    $ID = $item['IDKatalog'];
//                    $Nama = $item['Nama'];
//                    $Harga = $item['Harga'];
//                    $i = 1;
//                    $output .= "
//                        <tr>
//                            <td>$i</td>
//                            <td>$Nama</td>
//                            <td>$Harga</td>
//                        </tr>
//                    ";
//                    $i++;
//                }
//                $output .= "
//                        </tbody>
//                    </table>
//                \";
//                ";
//
//                echo $output;
//            } else if ($_POST['Tipe'] == 'dropdown') {
//                $output = "<select name='IDKatalog'>";
//
//                foreach ($data as $item) {
//                    $ID = $item['IDKatalog'];
//                    $Nama = $item['Nama'];
//
//                    $output .= "
//                        <option value='$ID'>$Nama</option>
//                    ";
//                }
//                $output .= "</select>";
//                echo $output;
//            }
//        } else {
//            echo "Kosong";
//        }
    }

    public function tambah_katalog()
    {
        Gudang::tambahKatalog();
    }

    public function ubah_katalog()
    {
        Gudang::ubahKatalog();
    }

    public function hapus_katalog()
    {
        Gudang::hapusKatalog();
    }
}

?>