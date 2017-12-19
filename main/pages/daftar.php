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
        <form action="index.php?c=controlPengguna&f=daftarUsaha" method="post">
            <div class="card-content">
                <span class="card-title">Daftarfkan Bisnis Anda</span>
                <div class="row">
                    <div class="col m6 s12">
                        <div class="input-field">
                            <label for="NamaUsaha">Nama Usaha</label>
                            <input type="text" id="NamaUsaha" name="NamaUsaha">
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
                            <label for="TanggalLahir">Tanggal Lahir</label>
                            <input type="text" id="TanggalLahir" name="TanggalLahir" class="datepicker">
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
                        <button type="submit" class="btn cyan waves-effect right">Selanjutnya</button>
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
    var element = document.querySelector('.datepicker');
    var option = {
        format: 'YYYY-MM-DD'
    };
    var instance = new M.Datepicker(element, option);
    function addUser() {

    };
</script>
</body>
</html>