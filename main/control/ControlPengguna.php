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

    public function cek_email()
    {
        $cek = Pengguna::cekUsername($_POST['email']);
        if ($cek) {
            echo "Email Tidak Tersedia";
        } else {
            echo "Sukses";
        }
    }

    public function masuk()
    {
        $hasil = Pengguna::login($_POST['email'], $_POST['pass']);
        if ($hasil !== null) {
            if ($hasil['Tingkatan'] == 'Admin') {
                header("location: index.php?c=ControlHalaman&f=admin_beranda");
                $_SESSION['nama'] = "Admin";
            } else if ($hasil['Tingkatan'] == 'Pemilik') {
                $_SESSION['IDUsaha'] = $hasil['IDUsaha'];
                $_SESSION['NamaUsaha'] = $hasil['NamaUsaha'];
                $_SESSION['IDPegawai'] = $hasil['IDPegawai'];
                $_SESSION['Nama'] = $hasil['Nama'];
                header("location: index.php?c=ControlHalaman&f=pemilik_beranda");
            } else if ($hasil['Tingkatan'] == 'Pengelola Transaksi') {
                $_SESSION['IDUsaha'] = $hasil['IDUsaha'];
                $_SESSION['NamaUsaha'] = $hasil['NamaUsaha'];
                $_SESSION['IDPegawai'] = $hasil['IDPegawai'];
                $_SESSION['Nama'] = $hasil['Nama'];
                header("location: index.php?c=ControlHalaman&f=transaksi_beranda");
            } else if ($hasil['Tingkatan'] == 'Pengelola Gudang') {
                $_SESSION['IDUsaha'] = $hasil['IDUsaha'];
                $_SESSION['NamaUsaha'] = $hasil['NamaUsaha'];
                $_SESSION['IDPegawai'] = $hasil['IDPegawai'];
                $_SESSION['Nama'] = $hasil['Nama'];
                header("location: index.php?c=ControlHalaman&f=gudang_beranda");
            } else if ($hasil['Tingkatan'] == 'Pengelola Keuangan') {
                $_SESSION['IDUsaha'] = $hasil['IDUsaha'];
                $_SESSION['NamaUsaha'] = $hasil['NamaUsaha'];
                $_SESSION['IDPegawai'] = $hasil['IDPegawai'];
                $_SESSION['Nama'] = $hasil['Nama'];
                header("location: index.php?c=ControlHalaman&f=keuangan_beranda");
            }
        } else {
            echo "Error";
        }
    }

    public function daftar_individu()
    {
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
        Pengguna::registerKelompok(
            $_POST['NamaUsaha'],
            $_POST['AlamatUsaha'],
            $_POST['Email'], $_POST['Email1'], $_POST['Email2'], $_POST['Email3'],
            $_POST['NamaPemilik'], $_POST['Nama1'], $_POST['Nama2'], $_POST['Nama3'],
            $_POST['AlamatPemilik'], $_POST['Alamat1'], $_POST['Alamat2'], $_POST['Alamat3'],
            $_POST['TempatLahir'], $_POST['TempatLahir1'], $_POST['TempatLahir2'], $_POST['TempatLahir3'],
            $_POST['TanggalLahir'], $_POST['TanggalLahir1'], $_POST['TanggalLahir2'], $_POST['TanggalLahir3'],
            $_POST['Password'], $_POST['Password1'], $_POST['Password2'], $_POST['Password3'],
            $_POST['Tipe']
        );
    }
}

?>
