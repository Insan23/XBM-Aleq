<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="assets/css/material-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="assets/css-modified/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<!--header-->
<nav>
    <div class="nav-wrapper cyan">
        <a href="index.php" class="brand-logo">XBM</a>
        <ul class="right">
            <li><a data-target="sidebar-login" class="sidenav-trigger"></a></li>
        </ul>
    </div>
</nav>

<div class="row">
    <div id="card-main" class="card col m6 s12 offset-m3 daftar-box">
        <div id="card">
            <div id="form1">
                <div class="card-content">
                    <span class="card-title">Daftarfkan Bisnis Anda</span>
                    <div class="row">
                        <div class="col m6 s12">
                            <div class="input-field">
                                <label for="NamaUsaha" id="labelnamausaha">Nama Usaha</label>
                                <input type="text" id="NamaUsaha" name="NamaUsaha" onchange="cekNamaBisnis(this.value)">
                            </div>
                            <div class="input-field">
                                <label for="AlamatUsaha">Alamat</label>
                                <input type="text" id="AlamatUsaha" name="AlamatUsaha">
                            </div>
                        </div>
                        <div class="col m6 s12">
                            <div class="input-field">
                                <label for="NamaPemilik">Nama Pemilik</label>
                                <input type="text" id="NamaPemilik" name="NamaPemilik">
                            </div>
                            <div class="input-field">
                                <label for="AlamatPemilik">Alamat Pemilik</label>
                                <input type="text" id="AlamatPemilik" name="AlamatPemilik">
                            </div>
                            <div class="input-field">
                                <label for="TempatLahir">Tempat Lahir</label>
                                <input type="text" id="TempatLahir" name="TempatLahir">
                            </div>
                            <div class="input-field">
                                <label for="TanggalLahir" class="active">Tanggal Lahir</label>
                                <input type="date" id="TanggalLahir" name="TanggalLahir">
                            </div>
                            <div class="input-field">
                                <label for="Email">Email</label>
                                <input type="email" id="Email" name="Email">
                            </div>
                            <div class="input-field">
                                <label for="Password">Kata Sandi</label>
                                <input type="text" id="Password" name="Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <div class="row">
                        <div class="col s6">
                            Sudah Punya Akun? <a href="login.php" class="btn cyan">Masuk</a>
                        </div>
                        <div class="col s6">
                            <button type="button" onclick="simpanForm1()" class="btn cyan waves-effect right">
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="form2" style="display: none;">
                <div id="form2" class="card-content">
                    <span class="card-title"><a role="button"><i class="material-icons">arrow_back</i></a>Kategori Bisnis</span>
                    <div class="input-field">
                        <select name="Tipe" id="Tipe">
                            <option value="none" disabled selected>Pilih Kategori</option>
                            <option value="Individu">Individu</option>
                            <option value="Kelompok">Kelompok</option>
                        </select>
                    </div>
                </div>
                <div class="card-action">
                    <div class="row">
                        <div class="col s6">
                        </div>
                        <div class="col s6">
                            <button type="button" onclick="simpanForm2()" class="btn cyan waves-effect right">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="form3" style="display: none;">
                <div class="card-content">
                    <span class="card-title"><a role="button"><i class="material-icons">keyboard_arrow_left</i></a>Daftarkan Pegawai Anda</span>
                    <div class="row">
                        <div class="col s4">
                            <h5>Pengelola Transaksi</h5>
                            <div class="input-field">
                                <label for="Nama1">Nama</label>
                                <input type="text" id="Nama1" name="Nama1">
                            </div>
                            <div class="input-field">
                                <label for="Alamat1">Alamat</label>
                                <input type="text" id="Alamat1" name="Alamat1">
                            </div>
                            <div class="input-field">
                                <label for="TempatLahir1">Tempat Lahir</label>
                                <input type="text" id="TempatLahir1" name="TempatLahir1">
                            </div>
                            <div class="input-field">
                                <label for="TanggalLahir1" class="active">Tanggal Lahir</label>
                                <input type="date" id="TanggalLahir1" name="TanggalLahir1">
                            </div>
                            <div class="input-field">
                                <label for="Email1">Email</label>
                                <input type="email" id="Email1" name="Email1">
                            </div>
                            <div class="input-field">
                                <label for="Password1">Kata Sandi</label>
                                <input type="text" id="Password1" name="Password1">
                            </div>
                        </div>
                        <div class="col s4">
                            <h5>Pengelola Gudang</h5>
                            <div class="input-field">
                                <label for="Nama2">Nama</label>
                                <input type="text" id="Nama2" name="Nama2">
                            </div>
                            <div class="input-field">
                                <label for="Alamat2">Alamat</label>
                                <input type="text" id="Alamat2" name="Alamat2">
                            </div>
                            <div class="input-field">
                                <label for="TempatLahir2">Tempat Lahir</label>
                                <input type="text" id="TempatLahir2" name="TempatLahir2">
                            </div>
                            <div class="input-field">
                                <label for="TanggalLahir2" class="active">Tanggal Lahir</label>
                                <input type="date" id="TanggalLahir2" name="TanggalLahir2">
                            </div>
                            <div class="input-field">
                                <label for="Email2">Email</label>
                                <input type="email" id="Email2" name="Email2">
                            </div>
                            <div class="input-field">
                                <label for="Password2">Kata Sandi</label>
                                <input type="text" id="Password2" name="Password2">
                            </div>
                        </div>
                        <div class="col s4">
                            <h5>Pengelola Keuangan</h5>
                            <div class="input-field">
                                <label for="Nama3">Nama</label>
                                <input type="text" id="Nama3" name="Nama3">
                            </div>
                            <div class="input-field">
                                <label for="Alamat3">Alamat</label>
                                <input type="text" id="Alamat3" name="Alamat3">
                            </div>
                            <div class="input-field">
                                <label for="TempatLahir3">Tempat Lahir</label>
                                <input type="text" id="TempatLahir3" name="TempatLahir3">
                            </div>
                            <div class="input-field">
                                <label for="TanggalLahir3" class="active">Tanggal Lahir</label>
                                <input type="date" id="TanggalLahir3" name="TanggalLahir3">
                            </div>
                            <div class="input-field">
                                <label for="Email3">Email</label>
                                <input type="email" id="Email3" name="Email3">
                            </div>
                            <div class="input-field">
                                <label for="Password3">Kata Sandi</label>
                                <input type="text" id="Password3" name="Password3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <div class="row">
                        <div class="col s6">
                        </div>
                        <div class="col s6">
                            <button type="button" onclick="simpanForm3()" class="btn cyan waves-effect right">
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </div>
                ;
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer class="page-footer cyan darken-1" style="padding-top: 0px">
    <div class="footer-copyright">
        <div class="container">
            © 2014 Hak Cipta Aleq Insan
            <a class="grey-text text-lighten-4 right" href=""></a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var elem = document.querySelector('select');
        var opt;
        var instance = new M.Select(elem, opt);
    });
    var ceknama = false;
    var NamaUsaha = "";
    var AlamatUsaha = "";
    var NamaPemilik = "";
    var AlamatPemilik = "";
    var TempatLahir = "";
    var TanggalLahir = "";
    var Email = "";
    var Password = "";
    var Tipe = "";

    function cekNamaBisnis(e) {
        if (e == '') {
            $("#labelnamausaha").text("Nama Usaha").removeClass("red-text green-text");
        } else {
            $.ajax(
                'index.php?c=ControlPengguna&f=cek_bisnis',
                {
                    type: "post",
                    data: {namausaha: e},
                    cache: false
                }
            ).done(function (data) {
                if (data == 'Nama Bisnis Telah Dipakai') {
                    $("#labelnamausaha").text("Nama Usaha " + data).addClass("red-text");
                    ceknama = false;
                } else {
                    $("#labelnamausaha").text("Nama Usaha " + data).addClass("green-text");
                    ceknama = true;
                }
            }).fail(function () {
                $("#labelnamausaha").text("Gagal mencari").addClass("red-text");
            });
        }
    }

    function simpanForm1() {
        NamaUsaha = $("#NamaUsaha").val();
        AlamatUsaha = $("#AlamatUsaha").val();
        NamaPemilik = $("#NamaPemilik").val();
        AlamatPemilik = $("#AlamatPemilik").val();
        TempatLahir = $("#TempatLahir").val();
        TanggalLahir = $("#TanggalLahir").val();
        Email = $("#Email").val();
        Password = $("#Password").val();
        if (ceknama) {
            $("#form1").css("display", "none");
            $("#form2").css("display", "block");
        } else {

        }
    }

    function simpanForm2() {
        Tipe = $("#Tipe").val();
        if (Tipe == 'Individu') {
            $.ajax(
                'index.php?c=ControlPengguna&f=daftar_individu',
                {
                    type: "post",
                    data: {
                        NamaUsaha: NamaUsaha,
                        AlamatUsaha: AlamatUsaha,
                        NamaPemilik: NamaPemilik,
                        AlamatPemilik: AlamatPemilik,
                        TempatLahir: TempatLahir,
                        TanggalLahir: TanggalLahir,
                        Email: Email,
                        Password: Password,
                        Tipe: Tipe
                    },
                    cache: false
                }
            ).done(function () {
                window.location.href = "index.php?c=ControlHalaman&f=halaman_masuk";
            }).fail(function () {

            });
        } else if (Tipe == 'Kelompok') {
            $("#form2").css("display", "none");
            $("#form3").css("display", "block");
            $("#card-main").removeClass("m6 s12 offset-m3");
            $("#card-main").addClass("m10 s12");
        } else {

        }
    }

    function simpanForm3() {
        var Nama1 = $("#Nama1").val();
        var Alamat1 = $("#Alamat1").val();
        var TempatLahir1 = $("#TempatLahir1").val();
        var TanggalLahir1 = $("#TanggalLahir1").val();
        var Email1 = $("#Email1").val();
        var Password1 = $("#Password1").val();

        var Nama2 = $("#Nama2").val();
        var Alamat2 = $("#Alamat2").val();
        var TempatLahir2 = $("#TempatLahir2").val();
        var TanggalLahir2 = $("#TanggalLahir2").val();
        var Email2 = $("#Email2").val();
        var Password2 = $("#Password2").val();

        var Nama3 = $("#Nama3").val();
        var Alamat3 = $("#Alamat3").val();
        var TempatLahir3 = $("#TempatLahir3").val();
        var TanggalLahir3 = $("#TanggalLahir3").val();
        var Email3 = $("#Email3").val();
        var Password3 = $("#Password3").val();

        $.ajax(
            'index.php?c=ControlPengguna&f=daftar_kelompok',
            {
                type: "post",
                data: {
                    NamaUsaha: NamaUsaha,
                    AlamatUsaha: AlamatUsaha,

                    NamaPemilik: NamaPemilik,
                    AlamatPemilik: AlamatPemilik,
                    TempatLahir: TempatLahir,
                    TanggalLahir: TanggalLahir,
                    Email: Email,
                    Password: Password,
                    Tipe: Tipe,

                    Nama1: Nama1,
                    Alamat1: Alamat1,
                    TempatLahir1: TempatLahir1,
                    TanggalLahir1: TanggalLahir1,
                    Email1: Email1,
                    Password1: Password1,

                    Nama2: Nama2,
                    Alamat2: Alamat2,
                    TempatLahir2: TempatLahir2,
                    TanggalLahir2: TanggalLahir2,
                    Email2: Email2,
                    Password2: Password2,

                    Nama3: Nama3,
                    Alamat3: Alamat3,
                    TempatLahir3: TempatLahir3,
                    TanggalLahir3: TanggalLahir3,
                    Email3: Email3,
                    Password3: Password3,
                },
                cache: false
            }
        ).done(function () {
            window.location.href = "index.php?c=ControlHalaman&f=halaman_masuk";
        }).fail(function () {

        });
    }

    function keForm1() {

    }

    function keForm2() {

    }

</script>
</body>
</html>