<!DOCTYPE html>
<html lang="id">
<head>
    <title>Beranda</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="assets/css/material-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="assets/css-modified/style.css">
</head>
<body>

<header>
    <nav>
        <div class="nav-wrapper indigo">
            <a href="#" class="brand-logo">Nama Usaha</a>
            <a data-target="sidebar" class="sidenav-trigger"><i class="material-icons sidenav-trigger-alt">menu</i></a>
            <ul id="nav-right" class="right hide-on-med-and-down">

            </ul>
        </div>
    </nav>
    <ul id="MenuUser" class="dropdown-content">
        <li><a href="">Profil Saya</a></li>
        <li><a href="">Profil Bisnis</a></li>
        <li><a href="">Tentang Usaha</a></li>
        <li class="divider"></li>
        <li><a href="">Tentang XBM</a></li>
        <li><a href="">Keluar</a></li>
    </ul>
</header>

<aside>
    <ul id="sidebar" class="sidenav">
        <li>
            <div class="user-view" style="width: 200px">
                <div class="background cyan"></div>
            </div>
        </li>
        <li><a href="index.php?c=ControlHalaman&f=transaksi_beranda">Beranda</a></li>
        <li><a href="index.php?c=ControlHalaman&f=transaksi_daftar_transaksi">Daftar Transaksi</a></li>
        <li class="divider"></li>
        <li class="hide-on-med-and-up"><a href="">Profil Saya</a></li>
        <li class="hide-on-med-and-up"><a href="">Profil Bisnis</a></li>
        <li class="hide-on-med-and-up"><a href="">Tentang Usaha</a></li>
        <li class="divider hide-on-med-and-up"></li>
        <li class="hide-on-med-and-up"><a href="">Tentang XBM</a></li>
        <li class="hide-on-med-and-up"><a href="">Keluar</a></li>
    </ul>
</aside>

<div>

</div>

<footer></footer>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

    });
    var elem = document.querySelector('.sidenav');
    var option;
    var instance = new M.Sidenav(elem, option);
</script>

</body>
</html>