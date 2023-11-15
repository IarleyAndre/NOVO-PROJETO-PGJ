<?php


if (!isset($_SESSION)) {
    session_start();

}

if ($_SESSION ['nivel'] > 2){
    header('location: aviso.php');
}

?>