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
    <div class="card col m4 s12 offset-m4 daftar-box">
        <form action="index.php?c=controlPengguna&f=daftarTipe" method="post">
            <div class="card-content">
                <span class="card-title"><button type="button"><i class="material-icons">arrow_back</i></button>Kategori Bisnis</span>
                <div class="input-field">
                    <select name="Tipe" id="Pengelola">
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
                        <button type="submit" class="btn cyan waves-effect right">Daftar</button>
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
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
    var element = document.querySelector('select');
    var option = {

    };
    var instance = new M.Select(element, option);
</script>
</body>
</html>