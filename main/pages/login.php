<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masuk</title>
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
        <a href="" class="brand-logo">XBM</a>
        <ul class="right">
            <li><a data-target="sidebar-login" class="sidenav-trigger"></a></li>
        </ul>
    </div>
</nav>

<div class="row">
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="card col m4 s12 offset-m4">
        <form action="index.php?c=controlPengguna&f=masuk" method="post">
            <div class="card-content">
                <span class="card-title">Masuk Untuk Memulai</span>
                <div class="input-field">
                    <label for="Email">Email</label>
                    <input type="email" id="Email" name="Email" class="validate"
                           data-error="Email Tidak Valid" data-success="" autofocus>
                </div>
                <div class="input-field">
                    <label for="Password">Kata Sandi</label>
                    <input type="password" id="Password" name="Password">
                </div>
            </div>
            <div class="card-action">
                <button type="submit" class="btn cyan waves-effect">Masuk</button>
                <!--                <a href="" class="btn btn-flat">Daftar</a>-->
            </div>
        </form>
    </div>
</div>

<!-- footer -->
<footer class="page-footer footer-small cyan darken-1">
    <div class="footer-copyright">
        <div class="container">
            © 2014 Hak Cipta Aleq Insan
            <a class="grey-text text-lighten-4 right" href=""></a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
</body>
</html>