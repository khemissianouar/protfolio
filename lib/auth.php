<?php

include 'include.php';
session_start();
if (!isset($auth)){
if (!isset($_SESSION['Auth']['id'])) {
    header('location' . WEBROOT . 'login.php');
    die();
}
}
if (!isset($_SESSION['csrf'])){
    $_SESSION['csrf'] = md5(time()+rand());
}


