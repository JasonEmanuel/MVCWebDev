<?php 

include("modeloffice.php");



function insertOffice(){
    $office = new office();
    $office->officename = $_POST['officename'];
    $office->address = $_POST['address'];
    $office->city = $_POST['city'];
    $office->phone = $_POST['phone'];
    array_push($_SESSION['listOffice'], $office);
}

function indexOffice(){
    return $_SESSION['listOffice'];
}

function editOffice($id){
    $office = new office();
    $office->officename = $_POST['officename'];
    $office->address = $_POST['address'];
    $office->city = $_POST['city'];
    $office->phone = $_POST['phone'];
    $_SESSION['listOffice'][$id] = $office;
}

function deleteOffice($id){
    unset($_SESSION['listOffice'][$id]);
}
?>