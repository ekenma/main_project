<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php include './assests/header_content.php'; ?>
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDe1WA3pRyLZ7EfvbnjnBYrSiulECdD6n8'></script>
        <title>Ad Title</title>
    </head>
    <body>
        <div class="container">
            <?php include './views/menu.php'; ?>
            <div class="row row-centered">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered margin-top-30">
                    <img src="./assests/images/head_banner.jpg" style="width: 100%; height: 100px;" class="img-responsive" alt="banner_img">
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-centered margin-top-30">
                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 inner-box padding-left-30 padding-right-30 padding-bottom-15 margin-left-30 view-container">
                        <h3 class="box-title-lg">Ad Title Goes Here</h3>
                        <span class="ad-details"><span class="fa fa-clock-o"></span>&nbsp;Today 10:00 am - Electronics - <span class="fa fa-map-marker"></span>&nbsp;Location</span>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1 class="price-tag shadow">
                                50,000.00
                                <br/>
                                <span>Negotiable</span>
                            </h1>
                            <div class="img-slider">
                                <ul id="exampleSlider">
                                    <li><img src="./assests/images/top-add.jpg" alt="View Advertisement" class="active"/></li>
                                    <li><img src="./assests/images/top-add.jpg" alt="View Advertisement" class="active"/></li>
                                    <li><img src="./assests/images/top-add.jpg" alt="View Advertisement" class="active"/></li>
                                    <li><img src="./assests/images/top-add.jpg" alt="View Advertisement" class="active"/></li>
                                </ul>
                            </div>
                            <div class="row row-centered">
                                <img src="./assests/images/top-add.jpg" alt="Thumbnail" class="thumbs_img"/>
                                <img src="./assests/images/top-add.jpg" alt="Thumbnail" class="thumbs_img"/>
                                <img src="./assests/images/top-add.jpg" alt="Thumbnail" class="thumbs_img"/>
                                <img src="./assests/images/top-add.jpg" alt="Thumbnail" class="thumbs_img"/>
                                <img src="./assests/images/top-add.jpg" alt="Thumbnail" class="thumbs_img"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tab-container padding-all-15 margin-top-30">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                <li><a data-toggle="tab" href="#bid">Bid Ad</a></li>
                                <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active padding-all-15">
                                    <p>
                                        Lorem ipsum dolor sit amet, eros equidem quo an, cu vocent veritus vituperatoribus quo, his at elit diceret inimicus. Sea ut case aperiam. At consequat reprehendunt mei. Essent iriure nam at, ea virtute constituto cum, ad evertitur scribentur duo. Fabulas reprimique cu nec, animal nominavi mei an. Mel cu elit repudiare, ea per modo laboramus temporibus, delicata definitionem ex nam.
                                    </p>
                                </div>
                                <div id="bid" class="tab-pane fade padding-all-15">
                                    <form class="form-inline" action="#" method="post">
                                        <div class="form-group">
                                            <input type="number" class="form-control bid-text" required placeholder="LEAVE A BID"/> 
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="form-control btn btn-dodgerblue bid-btn">BID NOW</button>
                                        </div>
                                    </form>
                                    
                                    <label class="bid-label">Average Price:<span> 50,000.00</span></label>
                                </div>
                                <div id="reviews" class="tab-pane fade padding-all-15">
                                    <h4>2 Review(s) For Advertisement</h4>
                                    <ul class="review-ul">
                                        <li>
                                            <div class="comment-container">
                                                <p>Visitor Name <span>- Today 10:00 am</span></p>
                                                <p class="comment-text">Lorem ipsum dolor sit amet, eros equidem quo an, cu vocent veritus vituperatoribus quo, his at elit diceret inimicus. Sea ut case aperiam.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-container">
                                                <p>Visitor Name <span>- Today 10:00 am</span></p>
                                                <p class="comment-text">Lorem ipsum dolor sit amet, eros equidem quo an, cu vocent veritus vituperatoribus quo, his at elit diceret inimicus. Sea ut case aperiam.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 inner-box margin-left-30 ads-container padding-left-15 padding-right-15 padding-bottom-15 contact-seller">
                        <h3 class="box-title">Contact Seller</h3>
                        <img src="./assests/images/dealer-logo.png" alt="Seller Logo"/>
                        <a href="#"><h3 class="seller-name">Auto Dealer</h3></a>
                        <p>Location:<span>Gampaha</span></p>
                        <p>Web:<span>www.autodealer.com</span></p>
                        <button type="button" class="btn btn-default contact-btn" data-toggle="modal" data-target="#contactModal"><span class="fa fa-envelope"></span>&nbsp;Send a Message</button>
                        <button type="button" class="btn btn-warning contact-btn"><span class="fa fa-phone"></span>&nbsp;0123 456 789</button>
                    </div>
                    
                    <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 inner-box margin-left-30 margin-top-30 ads-container padding-left-15 padding-right-15 padding-bottom-15 actions">
                        <h3 class="box-title">Actions</h3>
                        <ul class="actions-ul">
                            <li><a href="#" data-toggle="modal" data-target="#mapModal"><span class="fa fa-map-o"></span>&nbsp;&nbsp;View Location on Map</a></li>
                            <li><a href="#"><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;More Ads By User</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#reportModal"><span class="fa fa-ban"></span>&nbsp;&nbsp;&nbsp;Report Ad</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 inner-box margin-left-30 margin-top-30 ads-container padding-left-15 padding-right-15 padding-bottom-15">
                        <h3 class="box-title">Safety Tips for Buyers</h3>
                        <ul class="safety-ul">
                            <li><span class="fa fa-check"></span>&nbsp;Meet seller at a public place</li> 
                            <li><span class="fa fa-check"></span>&nbsp;Check the item before you buy</li>
                            <li><span class="fa fa-check"></span>&nbsp;Pay only after collecting the item</li>
                            <li><a href="#" class="pull-right">Know More >></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php include './views/modals/map_modal.php'; ?>
            <?php include './views/modals/report_modal.php'; ?>
            <?php include './views/modals/contact_modal.php'; ?>
            <div class="row">
                <?php include './views/footer.php'; ?>
            </div>
        </div>
        <?php include './assests/script_refs.php'; ?>
        
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });

            $(function() {

                /* SET PARAMETERS */
                var change_img_time = 7000;
                var transition_speed = 1000;

                var simple_slideshow = $("#exampleSlider"),
                        listItems = simple_slideshow.children('li'),
                        listLen = listItems.length,
                        i = 0,
                        changeList = function() {

                    listItems.eq(i).fadeOut(transition_speed, function() {
                        i += 1;
                        if (i === listLen) {
                            i = 0;
                        }
                        listItems.eq(i).fadeIn(transition_speed);
                    });

                };

                listItems.not(':first').hide();
                setInterval(changeList, change_img_time);

            });
        </script>
    </body>
</html>
