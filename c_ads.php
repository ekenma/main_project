<?php 
    include './Model/db.php';
    include './Model/CategoryManager.php';
    include './Model/AdvertisementManager.php';
    include './Model/DestrictsManager.php';
    include './Model/SubCategoriesManager.php';
    
    $action = "";

    if(isset($_GET["action"])){
        $action = $_GET["action"];
    }
    
    switch($action){
        case 'categories':
            showAdsByCategories();
            break;
        case 'view':
            viewAdvertisement();
            break;
        case 'publish':
            publishAdvertisements();
            break;
    }
    
    function showAdsByCategories(){
        $category = str_replace("-", " ", $_GET["article"]);
        
        $destricts = Destrict::getFirstTenOrderByName();
        
        $subCategories = SubCategory::getByCategoryName($category);
        
        $layout = $_GET["layout"];
        
        if($layout == "grid"){
            require './views/category_wise_search/ads_by_categories_grid.php';
        }else {
            require './views/category_wise_search/ads_by_categories.php';
        }
    }
    
    function viewAdvertisement(){
        require './views/view_ad.php';
    }
    
    function publishAdvertisements(){
        $destricts = Destrict::getFirstTenOrderByName();
        
        $categories = Category::getList();
        
        require './views/ads/publish_advertisement.php';
    }
?>