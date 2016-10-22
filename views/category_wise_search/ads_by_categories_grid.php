<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php include './assests/header_content.php'; ?>
        <title><?php echo $category; ?></title>
    </head>
    <body>
        <div class="container">
            <?php include './views/menu.php'; ?>
            <div class="row row-centered">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered margin-top-30">
                    <img src="./assests/images/head_banner.jpg" style="width: 100%; height: 100px;" class="img-responsive" alt="banner_img">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 row-centered">
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered">
                        <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 margin-top-30 left-container">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-left-15 padding-right-15 box-shadow inner-box loc-box">
                                <h2 class="box-title">Sub Categories<span class="fa fa-angle-up pull-right show-hide" title="Show/Hide" onclick="toggleShow('cat_ul');"></span></h2>
                                <ul id="cat_ul">
                                    <?php 
                                        foreach($subCategories as $subCategory){
                                    ?>
                                    <li>&GT;&nbsp;<a href="<?php echo "sub-categories/".  str_replace(" ", "-", $subCategory->name)."/recent/list" ?>"><?php echo $subCategory->name ?></a></li>
                                    <?php 
                                        }
                                    ?>
                                </ul>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-left-15 padding-right-15 margin-top-30 box-shadow inner-box loc-box">
                                <h2 class="box-title"><span class="fa fa-map-marker"></span>&nbsp;Top Locations<span class="fa fa-angle-up pull-right show-hide" title="Show/Hide" onclick="toggleShow('loc_ul');"></span></h2>
                                <ul id="loc_ul">
                                    <?php 
                                        foreach($destricts as $destrict){
                                            $adCount = Advertisement::getAdCountByDistrictname($destrict->name);
                                    ?>
                                    <li>&GT;&nbsp;<a href="<?php echo "districts/".str_replace(" ", "-", $destrict->name)."/recent/list" ?>"><?php echo $destrict->name." ($adCount)" ?> </a></li>
                                    <?php 
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 margin-top-30 ads-container margin-left-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 inner-box margin-bottom-30 padding-all-15">
                                    <div class="dropdown col-xs-12 col-sm-3 cpl-md-2 col-lg-2 sort-by">
                                        <button class="btn btn-white dropdown-toggle" type="button" data-toggle="dropdown">Sort By
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $_GET["action"]."/".$_GET["article"]."/recent/".$_GET["layout"] ?>">Recently Added</a></li>
                                            <li><a href="<?php echo $_GET["action"]."/".$_GET["article"]."/price/".$_GET["layout"] ?>">Price Low to High</a></li>
                                        </ul>
                                    </div>
                                    <a class="pull-right layout-icon" href="<?php echo $_GET["action"]."/".$_GET["article"]."/".$_GET["sort"]."/grid" ?>" title="Grid Layout"><span class="fa fa-th"></span></a>
                                    <a class="pull-right layout-icon" href="<?php echo $_GET["action"]."/".$_GET["article"]."/".$_GET["sort"]."/list" ?>" title="List Layout"><span class="fa fa-th-list"></span></a>
                                </div>
                                
                                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 box-shadow inner-box ad-box-grid">
                                    <div class="ad-ribbon darkcyan">Top Ad</div>
                                    <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad-img" class="img-responsive pull-left"/></a>
                                    <h5 class="title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></h5>
                                    <span class="price pull-right">Rs. 50,000.00</span>
                                    <h5 class="ad-details"><span class="fa fa-clock-o"></span>&nbsp;Today 10:11 am - Sub Categroy</h5>
                                    <h5 class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</h5>
                                    <br/>
                                    <br/>
                                    <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                    <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                </div>
                                
                                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 box-shadow inner-box ad-box-grid">
                                    <div class="ad-ribbon darkorange">Featured Ad</div>
                                    <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad-img" class="img-responsive pull-left"/></a>
                                    <h5 class="title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></h5>
                                    <span class="price pull-right">Rs. 50,000.00</span>
                                    <h5 class="ad-details"><span class="fa fa-clock-o"></span>&nbsp;Today 10:11 am - Sub Categroy</h5>
                                    <h5 class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</h5>
                                    <br/>
                                    <br/>
                                    <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                    <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                </div>
                                
                                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 box-shadow inner-box ad-box-grid">
                                    <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad-img" class="img-responsive pull-left"/></a>
                                    <h5 class="title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></h5>
                                    <span class="price pull-right">Rs. 50,000.00</span>
                                    <h5 class="ad-details"><span class="fa fa-clock-o"></span>&nbsp;Today 10:11 am - Sub Categroy</h5>
                                    <h5 class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</h5>
                                    <br/>
                                    <br/>
                                    <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                    <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                </div>
                                
                                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 box-shadow inner-box ad-box-grid">
                                    <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad-img" class="img-responsive pull-left"/></a>
                                    <h5 class="title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></h5>
                                    <span class="price pull-right">Rs. 50,000.00</span>
                                    <h5 class="ad-details"><span class="fa fa-clock-o"></span>&nbsp;Today 10:11 am - Sub Categroy</h5>
                                    <h5 class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</h5>
                                    <br/>
                                    <br/>
                                    <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                    <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                </div>
                                
                                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 box-shadow inner-box ad-box-grid">
                                    <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad-img" class="img-responsive pull-left"/></a>
                                    <h5 class="title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></h5>
                                    <span class="price pull-right">Rs. 50,000.00</span>
                                    <h5 class="ad-details"><span class="fa fa-clock-o"></span>&nbsp;Today 10:11 am - Sub Categroy</h5>
                                    <h5 class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</h5>
                                    <br/>
                                    <br/>
                                    <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                    <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                </div>
                                
                                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 box-shadow inner-box ad-box-grid">
                                    <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad-img" class="img-responsive pull-left"/></a>
                                    <h5 class="title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></h5>
                                    <span class="price pull-right">Rs. 50,000.00</span>
                                    <h5 class="ad-details"><span class="fa fa-clock-o"></span>&nbsp;Today 10:11 am - Sub Categroy</h5>
                                    <h5 class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</h5>
                                    <br/>
                                    <br/>
                                    <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                    <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-15">
                                <a href="#" class="btn btn-default pagination-btn shadow">1</a>
                                <a href="#" class="btn btn-default pagination-btn shadow">2</a>
                                <a href="#" class="btn btn-default pagination-btn shadow">3</a>
                                <a href="#" class="btn btn-default pagination-btn shadow">4</a>
                                <a href="#" class="btn btn-default pagination-btn shadow">5</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include './views/footer.php'; ?>
            </div>
        </div>
        <?php include './assests/script_refs.php'; ?>
    </body>
</html>
