<!DOCTYPE html>
<html lang="id">
<head>
    <title>XBM - Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="assets/css/material-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="assets/css-modified/style.css">
</head>
<body>

<!-- navbar atas -->
<div class="">
    <nav>
        <div class="nav-wrapper cyan">
            <a href="" class="brand-logo">XBM</a>
            <a data-target="sidebar" class="sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right">
                <li><a href="#fitur">Apa Itu XBM?</a></li>
                <li><a href="#tentang-kami">Tentang Kami</a></li>
                <li><a href="index.php?c=ControlHalaman&f=halaman_daftar">Daftar</a></li>
                <li><a href="index.php?c=ControlHalaman&f=halaman_masuk">Masuk</a></li>
            </ul>
        </div>
    </nav>
</div>

<aside>
    <ul id="sidebar" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background cyan"></div>
            </div>
        </li>
        <li><a href="#fitur">Apa Itu XBM?</a></li>
        <li><a href="#tentang-kami">Tentang Kami</a></li>
        <li><a href="index.php?c=ControlHalaman&f=halaman_daftar">Daftar</a></li>
        <li><a href="index.php?c=ControlHalaman&f=halaman_masuk">Masuk</a></li>
    </ul>
</aside>

<!-- konten utama -->
<div>
    <div class="section center" style="min-height: 90vh;">
        <h2>Xpress Business Management</h2>
        <h4>Kelola Bisnis Anda Dengan Mudah</h4>
        <a href="#fitur" class="btn-large btn cyan darken-2 hoverable waves-effect waves-light">Selanjutnya</a>
    </div>

    <div class="divider"></div>
    <div class="section hoverable" id="fitur">
        <div class="row">
            <div class="col s12 m6 center-align">
                <i class="material-icons cyan-text" style="font-size: 12rem">people</i>
            </div>
            <div class="col s12 m6">
                <h3>Fleksibel</h3>
                <h5>Dapat Dikelola Secara Individu Maupun Berkelompok</h5>
                <p>Dalam menjalankan manajemen proses bisnis, user di beri keluasan dalam menetukan siapa saja yang
                    dapat berinteraksi dengan proses bisnis tersebut sehingga dapat memudahkan user untuk mengoptimalkan
                    proses bisnis dalam website kami</p>
            </div>
        </div>
    </div>

    <div class="divider"></div>
    <div class="section hoverable">
        <div class="row">
            <div class="col s12 m6">
                <h3>Cepat</h3>
                <h5>Meminimalisir penggunaan media tulis dalam merekam proses bisnis yang dilakukan</h5>
                <p>Seringkali dijumpai bahwa penggunaan media tulis dalam merekap data proses bisnis bukanlah cara yang
                    efektif. Setelah itu pastinya akan di masukkan lagi dalam pembukuan yang nantinya di jadikan sebuah
                    laporan aktivitas. hal tersebut selain mengeluarkan biaya tambahan, juga tidaklah efektif dalam
                    manajemen waktu.</p>
            </div>
            <div class="col s12 m6 center-align">
                <i class="material-icons cyan-text" style="font-size: 12rem">flash_on</i>
            </div>
        </div>
    </div>

    <div class="divider"></div>
    <div class="section hoverable">
        <div class="row">
            <div class="col s12 m6 center-align">
                <i class="material-icons cyan-text" style="font-size: 12rem">security</i>
            </div>
            <div class="col s12 m6">
                <h3>Aman</h3>
                <h5></h5>
                <p>Keamanan proses data ataupun laporan suatu bisnis merupakan hal yang terpenting. Dengan website ini,
                    kami memberikan fasilitas yang memberikan keamanan data dari tindakan human error.</p>
            </div>
        </div>
    </div>

    <div class="divider"></div>
    <div class="section">
        <div class="row">
            <div class="col s12 m6">

            </div>
            <div class="col s12 m6">
                <h3></h3>
                <h5></h5>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer class="page-footer cyan darken-1" id="tentang-kami">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Tentang Kami</h5>
                <p class="grey-text text-lighten-4"></p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Kontak Kami</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://facebook.com/Art.Int.Aleq">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://Instagram.com/al.insan23">Instagram</a></li>
                    <li><a class="grey-text text-lighten-3" href="mailto:zuna.ruka596@gmail.com">Gmail</a></li>
                </ul>
            </div>
        </div>
    </div>
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
    var elem = document.querySelector('.sidenav');
    var option;
    var instance = new M.Sidenav(elem, option);
</script>
</body>
</html>