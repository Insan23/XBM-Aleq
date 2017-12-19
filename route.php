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
        case 'controlHalaman':
            $controller = new controlHalaman();
            break;
        case 'controlPengguna':
            require_once('main/model/Pengguna.php');
            $controller = new controlPengguna();
            break;
    }
    $controller->{$action}();
}

call($controller, $action);

?>