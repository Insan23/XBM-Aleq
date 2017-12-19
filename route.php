<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 29/10/2017
 * Time: 13:45
 */
function call($controller, $action)
{
    require_once('main/control/' . $controller . '.php');

    switch ($controller) {
        case 'ControlAdmin':
            require_once('main/model/Admin.php');
            $controller = new ControlAdmin();
            break;
        case 'ControlGudang':
            require_once('main/model/Gudang.php');
            $controller = new ControlGudang();
            break;
        case 'ControlHalaman':
            require_once('main/model/Gudang.php');
            require_once('main/model/Keuangan.php');
            require_once('main/model/Pengguna.php');
            require_once('main/model/Transaksi.php');
            $controller = new ControlHalaman();
            break;
        case 'ControlKeuangan':
            require_once('main/model/Keuangan.php');
            $controller = new ControlKeuangan();
            break;
        case 'ControlPengguna':
            require_once('main/model/Pengguna.php');
            $controller = new ControlPengguna();
            break;
        case 'ControlTransaksi':
            require_once('main/model/Transaksi.php');
            $controller = new ControlTransaksi();
            break;
    }
    $controller->{$action}();
}

call($controller, $action);

?>