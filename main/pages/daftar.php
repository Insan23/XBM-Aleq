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
    <div class="card col m6 s12 offset-m3 daftar-box">
        <form id="card">
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
                        <!--                        <a href="daftar-2.php" class="btn cyan waves-effect right">Selanjutnya</a>-->
                        <button type="button" onclick="simpanForm1()" class="btn cyan waves-effect right">Selanjutnya
                        </button>
                    </div>
                </div>
            </div>
        </form>
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

    var form1 = "<div class='card-content'>\n" +
        "                <span class='card-title'>Daftarfkan Bisnis Anda</span>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col m6 s12'>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='NamaUsaha' id='labelnamausaha'>Nama Usaha</label>\n" +
        "                            <input type='text' id='NamaUsaha' name='NamaUsaha' onchange='cekNamaBisnis(this.value)'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='AlamatUsaha'>Alamat</label>\n" +
        "                            <input type='text' id='AlamatUsaha' name='AlamatUsaha'>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col m6 s12'>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='NamaPemilik'>Nama Pemilik</label>\n" +
        "                            <input type='text' id='NamaPemilik' name='NamaPemilik'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='AlamatPemilik'>Alamat Pemilik</label>\n" +
        "                            <input type='text' id='AlamatPemilik' name='AlamatPemilik'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TempatLahir'>Tempat Lahir</label>\n" +
        "                            <input type='text' id='TempatLahir' name='TempatLahir'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TanggalLahir' class='active'>Tanggal Lahir</label>\n" +
        "                            <input type='date' id='TanggalLahir' name='TanggalLahir'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Email'>Email</label>\n" +
        "                            <input type='email' id='Email' name='Email'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Password'>Kata Sandi</label>\n" +
        "                            <input type='text' id='Password' name='Password'>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>" +
        "            <div class='card-action'>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col s6'>\n" +
        "                        Sudah Punya Akun? <a href='login.php' class='btn cyan'>Masuk</a>\n" +
        "                    </div>\n" +
        "                    <div class='col s6'>\n" +
        "                        <!--                        <a href='daftar-2.php' class='btn cyan waves-effect right'>Selanjutnya</a>-->\n" +
        "                        <button type='button' onclick='simpanForm1()' class='btn cyan waves-effect right'>Selanjutnya\n" +
        "                        </button>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>";

    var form2 = "<div class='card-content'>\n" +
        "                <span class='card-title'><a role='button' id='form1'><i class='material-icons'>arrow_back</i></a>Kategori Bisnis</span>\n" +
        "                <div class='input-field'>\n" +
        "                    <select name='Tipe' id='Tipe'>\n" +
        "                        <option value='none' disabled selected>Pilih Kategori</option>\n" +
        "                        <option value='Individu'>Individu</option>\n" +
        "                        <option value='Kelompok'>Kelompok</option>\n" +
        "                    </select>\n" +
        "                </div>\n" +
        "            </div>\n" +
        "            <div class='card-action'>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col s6'>\n" +
        "\n" +
        "                    </div>\n" +
        "                    <div class='col s6'>\n" +
        "                        <button type='button' onclick='simpanForm2()' class='btn cyan waves-effect right'>Daftar</button>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>";

    var form3 = "<div class='card-content'>\n" +
        "                <span class='card-title'><a role='button'><i class='material-icons'>keyboard_arrow_left</i></a>Daftarkan Pegawai Anda</span>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col s4'>\n" +
        "                        <h5>Pengelola Transaksi</h5>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Nama1'>Nama</label>\n" +
        "                            <input type='text' id='Nama1' name='Nama1'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Alamat1'>Alamat</label>\n" +
        "                            <input type='text' id='Alamat1' name='Alamat1'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TempatLahir1'>Tempat Lahir</label>\n" +
        "                            <input type='text' id='TempatLahir1' name='TempatLahir1'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TanggalLahir1' class='active'>Tanggal Lahir</label>\n" +
        "                            <input type='date' id='TanggalLahir1' name='TanggalLahir1'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Email1'>Email</label>\n" +
        "                            <input type='email' id='Email1' name='Email1'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Password1'>Kata Sandi</label>\n" +
        "                            <input type='text' id='Password1' name='Password1'>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col s4'>\n" +
        "                        <h5>Pengelola Gudang</h5>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Nama2'>Nama</label>\n" +
        "                            <input type='text' id='Nama2' name='Nama2'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Alamat2'>Alamat</label>\n" +
        "                            <input type='text' id='Alamat2' name='Alamat2'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TempatLahir2'>Tempat Lahir</label>\n" +
        "                            <input type='text' id='TempatLahir2' name='TempatLahir2'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TanggalLahir2' class='active'>Tanggal Lahir</label>\n" +
        "                            <input type='date' id='TanggalLahir2' name='TanggalLahir2'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Email2'>Email</label>\n" +
        "                            <input type='email' id='Email2' name='Email2'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Password2'>Kata Sandi</label>\n" +
        "                            <input type='text' id='Password2' name='Password2'>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                    <div class='col s4'>\n" +
        "                        <h5>Pengelola Keuangan</h5>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Nama3'>Nama</label>\n" +
        "                            <input type='text' id='Nama3' name='Nama3'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Alamat3'>Alamat</label>\n" +
        "                            <input type='text' id='Alamat3' name='Alamat3'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TempatLahir3'>Tempat Lahir</label>\n" +
        "                            <input type='text' id='TempatLahir3' name='TempatLahir3'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='TanggalLahir3' class='active'>Tanggal Lahir</label>\n" +
        "                            <input type='date' id='TanggalLahir3' name='TanggalLahir3'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Email3'>Email</label>\n" +
        "                            <input type='email' id='Email3' name='Email3'>\n" +
        "                        </div>\n" +
        "                        <div class='input-field'>\n" +
        "                            <label for='Password3'>Kata Sandi</label>\n" +
        "                            <input type='text' id='Password3' name='Password3'>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>\n" +
        "            <div class='card-action'>\n" +
        "                <div class='row'>\n" +
        "                    <div class='col s6'>\n" +
        "                    </div>\n" +
        "                    <div class='col s6'>\n" +
        "                        <button type='button' onclick='simpanForm3()' class='btn cyan waves-effect right'>Selanjutnya</button>\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>";

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
            $("#card").empty();
            $("#card").html(form2);
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
        } else {
            $("#card").empty();
            $("#card").html(form3);
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


</script>
</body>
</html>