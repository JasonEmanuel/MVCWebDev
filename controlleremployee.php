<?php 

include("modelemployee.php");


function insertEmployee(){
    $karyawan = new karyawan();
    $karyawan->nama = $_POST['nama'];
    $karyawan->jabatan = $_POST['jabatan'];
    $karyawan->usia = $_POST['usia'];
    array_push( $_SESSION['listKaryawan'],$karyawan);
}

function indexEmployee(){ 
    return $_SESSION['listKaryawan'];
}

function editEmployee($id){
    $karyawan = new karyawan();
    $karyawan->nama = $_POST['nama'];
    $karyawan->jabatan = $_POST['jabatan'];
    $karyawan->usia = $_POST['usia'];
    $_SESSION['listKaryawan'][$id] = $karyawan;
}

function deleteEmployee($id){
    unset($_SESSION['listKaryawan'][$id]);
}
?>