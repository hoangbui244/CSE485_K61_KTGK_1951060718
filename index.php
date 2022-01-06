<?php
include "./model/index.php"
$db = new crud();
if (isset($_GET['controller'])){
    $controller = $_GET['controller'];
} else {
    $controller = "";
}
switch ($controller) {
    case '1951060718_dhtl':
        require_once "controller/index.php";
        break;
    default:
        require_once "controller/index.php";
        break
}
?>