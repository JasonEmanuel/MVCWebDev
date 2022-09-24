<?php 
require("controlleremployee.php");
require("controlleroffice.php");
require("controllermix.php");
session_start();

if(!isset($_SESSION['listKaryawan'])){
    $_SESSION['listKaryawan'] = array();
}
if(!isset($_SESSION['listOffice'])){
    $_SESSION['listOffice'] = array();
}
if(!isset($_SESSION['listMix'])){
    $_SESSION['listMix'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Office & Employee</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="viewemployee.php">Employee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewoffice.php">Office</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewmix.php">Office-Employee</a>
        </li>
    </ul>
    </div>
</nav>