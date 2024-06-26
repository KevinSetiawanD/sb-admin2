<?php

include '../database/class/customer.php';

$act = isset($_GET["act"]) ? $_GET["act"] : "";
switch ($act) {
    case "create";
        include 'add.php';
        break;
    case "update";
        include 'edit.php';
        break;
    case "delete";
        include 'hapus.php';
        break;
    default:
        include 'index.php';
        break;
}
