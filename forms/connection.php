<?php 
function connect() {
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', 'root', 'rechauffement');
        $connect->set_charset("utf8");
    }
    return $connect;
}
?>