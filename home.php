<?php
include './Model/db.php';
include './Model/CategoryManager.php';
include './Model/AdvertisementManager.php';
include './Model/DestrictsManager.php';

date_default_timezone_set("Asia/Colombo");

$action = "";

if(isset($_GET["action"])){
    $action = $_GET["action"];
}

switch ($action) {
    default :
        index();
}

function index(){
    $categories = Category::getList();
    
    $destricts = Destrict::getFirstTenOrderByName();
    
    require './views/home.php';
}
?>