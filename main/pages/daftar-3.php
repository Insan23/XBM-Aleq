<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../../assets/css/material-icons.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/materialize.min.css" media="screen,projection">
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

<div class="row container">
    <div class="card col s12 daftar-box">
        <form action="" method="post">
            <div class="card-content">
                <span class="card-title"><a role="button"><i class="material-icons">keyboard_arrow_left</i></a>Daftarkan Pegawai Anda</span>
                <div class="row">
                    <div class="col s4">
                        <h5>Pengelola Transaksi</h5>
                        <div class="input-field">
                            <label for="Nama">Nama</label>
                            <input type="text" id="NamaPemilik" name="NamaPemilik">
                        </div>
                        <div class="input-field">
                            <label for="Alamat">Alamat</label>
                            <input type="text" id="Alamat" name="Alamat">
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
                    <div class="col s4">
                        <h5>Pengelola Gudang</h5>
                        <div class="input-field">
                            <label for="Nama">Nama</label>
                            <input type="text" id="NamaPemilik" name="NamaPemilik">
                        </div>
                        <div class="input-field">
                            <label for="Alamat">Alamat</label>
                            <input type="text" id="Alamat" name="Alamat">
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
                    <div class="col s4">
                        <h5>Pengelola Keuangan</h5>
                        <div class="input-field">
                            <label for="Nama">Nama</label>
                            <input type="text" id="NamaPemilik" name="NamaPemilik">
                        </div>
                        <div class="input-field">
                            <label for="Alamat">Alamat</label>
                            <input type="text" id="Alamat" name="Alamat">
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
                    </div>
                    <div class="col s6">
                        <a href="daftar-3.php" class="btn cyan waves-effect right">Selanjutnya</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- footer -->
<footer class="page-footer footer-small cyan darken-1" style="padding-top: 0px">
    <div class="footer-copyright">
        <div class="container">
            © 2014 Hak Cipta Aleq Insan
            <a class="grey-text text-lighten-4 right" href=""></a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
    var element = document.querySelector('select');
    var option = {

    };
    var instance = new M.Select(element, option);
</script>
</body>
</html>