<!DOCTYPE html>
<html lang="id">
<head>
    <title>Transaksi</title>
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
    <?php if ($daftar_transaksi != null) {
        ?>
        <h1>Daftar Transaksi</h1>
        <table>
            <thead>
            <tr>
                <td>No</td>
                <td>Waktu</td>
                <td>Nama Barang</td>
                <td>Banyak</td>
                <td>Total</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($daftar_transaksi as $item) {
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $item['Waktu']; ?></td>
                    <td><?php echo $item['Nama']; ?></td>
                    <td><?php echo $item['Banyak']; ?></td>
                    <td><?php echo $item['Total']; ?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
        <?php
    } else {
        ?>
        <h1>Tidak Ada Data Transaksi</h1>
        <?php
    }
    ?>
</div>

<!-- modal -->
<div id="logout" class="modal">
    <div class="modal-content">
        <h4>Yakin Logout?</h4>
    </div>
    <div class="modal-footer">
        <a href="logout.php" class="waves-effect waves-green btn-flat">Ya</a>
        <a class="modal-action modal-close waves-effect waves-green btn-flat">Tidak</a>
    </div>
</div>

<div id="tambah" class="modal">
    <div class="modal-content">
        <h4>Tambah Transaksi</h4>
        <div class="input-field">
            <?php if ($data_katalog != null) { ?>
                <select name="IDKatalog" id="IDKatalog" onchange="totalHarga(this.val())">
                    <option value="none" disabled>Pilih Barang</option>
                    <?php foreach ($data_katalog as $item) { ?>
                        <option value="<?php echo $item['IDKataog'] ?>"><?php echo $item['Nama'] ?></option>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <input type="text" disabled value="Tidak Ada Data Barang">
            <?php } ?>
        </div>
        <div class="input-field">
            <label for="Banyak">Jumlah</label>
            <input type="number" name="Banyak" id="Banyak">
        </div>

        <div class="input-field">
            <label for="Total">Total</label>
            <input type="text" disabled id="Total" name="Total">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" onclick="simpanTransaksi()" class="btn btn-flat waves-effect">Simpan</button>
    </div>
</div>

<footer></footer>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var option;
        var side = new M.Sidenav(
            document.querySelector('.sidenav'),
            option
        );
        var select = new M.Select(
            document.querySelector('select'),
            option
        );
    });
    var total = 0;
    <?php if ($data_katalog != null) {?>
    function totalHarga(e) {
        <?php foreach ($data_katalog as $item) {
        ?>
        var banyak = $("#Banyak").val();
        if (e == <?php echo $item['IDKataog']?>) {
            total = banyak * <?php echo $item['Harga']?>;
            $("#Total").val(total);
        }
        <?php}?>
    }
    <?php }?>

    function simpanTransaksi() {
        var IDKatalog = $("#IDKatalog").val();
        var Banyak = $("#Banyak").val();
        $.ajax(
            'index.php?c=ControlTransaksi&f=tambah_transaksi',
            {
                cache: false,
                data: {
                    IDKatalog: IDKatalog,
                    Banyak: Banyak,
                    Total: total
                },
                type: "post"
            }
        ).done(function () {
            window.location.href = "index.php?c=ControlHalaman&f=transaksi_daftar_transaksi";
        }).fail(function () {

        });
    }
</script>

</body>
</html>