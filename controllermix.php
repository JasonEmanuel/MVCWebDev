<?php 

include("modelmix.php");


function insertMix(){
    $mix = new mix();
    $mix->idnama = $_POST['idnama'];
    $mix->idoffice = $_POST['idoffice'];
    array_push($_SESSION['listMix'], $mix);
}

function indexMix(){
    return $_SESSION['listMix'];
}

function deleteMix($id){
    unset($_SESSION['listMix'][$id]);
}

?>