<?php 
function connect() {
    static $connect = null;
    if ($connect === null) {
        //$connect = mysqli_connect('localhost', 'root', 'root', 'rechauffement');
        $connect = mysqli_connect('mysql-saotrabe15.alwaysdata.net', '268543_user', 'Zj34f3qCW!qhd4R', 'saotrabe15_rc');
        $connect->set_charset("utf8");
    }
    return $connect;
}
?>