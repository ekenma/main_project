<!DOCTYPE html>
<html>
    <head>
        <?php include './assests/header_content.php'; ?>
        <title>1nma.com</title>
    </head>
    <body>
        <div class="container">
            <?php include './views/menu.php'; ?>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="width: 100%; padding: 0px;">
                    <div class="jumbotran transparent search-container">
                        <div class="row row-centered">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered search-box-text">
                                <h1>FIND AN AWESOME THINGS HERE</h1>
                                <h3>Find all things you need on 1nma.com. We give you a simple way.</h3>
                            </div>
                        </div>
                        <div class="row row-centered">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered search-bar padding-top-15 padding-left-15 padding-right-15">
                                <div class="dropdown col-xs-12 col-sm-3 cpl-md-2 col-lg-2 search-control">
                                    <button class="btn btn-white dropdown-toggle" type="button" data-toggle="dropdown">Category
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <?php
                                        foreach ($categories["results"] as $category) {
                                            ?>
                                            <li><a href="#"><?php echo $category->name ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="dropdown col-xs-12 col-sm-3 cpl-md-2 col-lg-2 search-control">
                                    <button class="btn btn-white dropdown-toggle" type="button" data-toggle="dropdown">Sub Category
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown col-xs-12 col-sm-3 cpl-md-2 col-lg-2 search-control">
                                    <button class="btn btn-white dropdown-toggle" type="button" data-toggle="dropdown">Location
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 cpl-md-3 col-lg-3 ">
                                    <input type="text" class="form-control search-field" placeholder="Keyword" /> 
                                </div>
                                <div class="col-xs-12 col-sm-3 cpl-md-3 col-lg-3">
                                    <button type="submit" class="btn btn-default btn-full-width search-field" style="margin-left: 5px"><span class="fa fa-search"></span>&nbsp;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered margin-top-30">
                    <img src="./assests/images/head_banner.jpg" style="width: 100%; height: 100px;" class="img-responsive" alt="banner_img">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 row-centered">
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered">
                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 margin-left-30 ads-container">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-30 padding-left-15 padding-right-15 inner-box box-shadow row-centered">
                                <h2 class="box-title">Top Categories</h2>
                                <?php
                                foreach ($categories["results"] as $category) {
                                    $adCount = Advertisement::getAdCountByCategory($category->id);
                                    ?>
                                <a href="categories/<?php echo str_replace(" ", "-", $category->name); ?>/recent/list">
                                    <div class="category-item col-centered padding-top-15 padding-right-15 padding-bottom-15 padding-left-15 text-darkcyan">
                                        <span class="<?php echo $category->icon ?>"></span><p><?php echo $category->name ?></p>
                                        <p class="ad-count"><?php echo $adCount ?></p>
                                    </div>
                                </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-30 padding-left-15 padding-right-15 inner-box box-shadow row-centered">
                                <h2 class="box-title">Featured Listings</h2>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 owl-carousel owl-theme">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item scroll-ad">
                                        <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad_image"/></a>
                                        <p class="ad-title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></p>
                                        <span class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</span>
                                        <br/>
                                        <span class="ad-details"><span class="fa fa-usd"></span>&nbsp;50,000.00</span>
                                        <br/>
                                        <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                        <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item scroll-ad">
                                        <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad_image"/></a>
                                        <p class="ad-title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></p>
                                        <span class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</span>
                                        <br/>
                                        <span class="ad-details"><span class="fa fa-usd"></span>&nbsp;50,000.00</span>
                                        <br/>
                                        <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                        <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item scroll-ad">
                                        <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad_image"/></a>
                                        <p class="ad-title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></p>
                                        <span class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</span>
                                        <br/>
                                        <span class="ad-details"><span class="fa fa-usd"></span>&nbsp;50,000.00</span>
                                        <br/>
                                        <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                        <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item scroll-ad">
                                        <a href="view/advertisement"><img src="./assests/images/top-add.jpg" alt="ad_image"/></a>
                                        <p class="ad-title"><a href="view/advertisement" class="text-teal">Advertisement Title</a></p>
                                        <span class="ad-details"><span class="fa fa-map-marker"></span>&nbsp;Location</span>
                                        <br/>
                                        <span class="ad-details"><span class="fa fa-usd"></span>&nbsp;50,000.00</span>
                                        <br/>
                                        <a href="view/advertisement" class="btn btn-default pull-right" style="margin-left: 5px" title="View Advertisement"><span class="fa fa-eye"></span></a>
                                        <a href="#" class="btn btn-white pull-right" title="Add to Favourites"><span class="fa fa-heart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 margin-left-30 ads-container">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 inner-box box-shadow margin-top-30">
                                <img src="./assests/images/ad_square.jpg" alt="ad_square" style="width: 100%; height: auto"/>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-left-15 padding-right-15 margin-top-30 inner-box box-shadow loc-box">
                                <h2 class="box-title"><span class="fa fa-map-marker"></span>&nbsp;Top Location<span class="fa fa-angle-up pull-right show-hide" title="Show/Hide" onclick="toggleShow('loc_ul');"></span></h2>
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
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered margin-top-30">
                    <img src="./assests/images/head_banner.jpg" style="width: 100%; height: 100px;" class="img-responsive" alt="banner_img">
                </div>
            </div>
            <div class="row">
                <?php include './views/footer.php'; ?>
            </div>
        </div>
    </div>
</div>
<?php include './assests/script_refs.php'; ?>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel(
                {
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    nav: true,
                    autoplay: true,
                    autoplayHoverPause: true,
                    navText: ["<span class='fa fa-angle-left slider-nav' title='Scroll Left'></span>","<span class='fa fa-angle-right slider-nav' title='Scroll Right'></span>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                }
        );
    });
</script>
</body>
</html>