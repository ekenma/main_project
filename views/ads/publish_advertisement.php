<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?php include './assests/header_content.php'; ?>
        <title>Publish an Advertisement</title>
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
                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 inner-box padding-left-15 padding-right-15 padding-bottom-15 margin-left-30 details-container">
                        <h3 class="box-title"><span class="fa fa-terminal"></span>&nbsp; Ad Title Goes Here</h3>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-left-30 padding-right-30">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" required class="form-control">
                                        <option value="">-Select a Category-</option>
                                        <?php 
                                            foreach($categories["results"] as $category){
                                        ?>
                                        <option value="#" style="background-color: #ccc; color: #5c5c5c; font-weight: bold; font-size: 13px;" disabled><?php echo "- ".$category->name." -" ?></option>
                                        
                                        <?php 
                                            $subCategories = SubCategory::getByCategoryId($category->id);
                                            
                                            foreach($subCategories as $subCategory){
                                        ?>
                                        <option value="<?php echo $subCategory->id ?>"><?php echo $subCategory->name ?></option>
                                       <?php        
                                            }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group margin-top-15">
                                    <label for="title">Advertisement Title</label>
                                    <input type="text" class="form-control" id="title" name="Title" placeholder="Title *" required />
                                </div> 
                                <div class="form-group margin-top-15">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="Description" placeholder="Description *" required></textarea>
                                </div>
                                <div class="form-group margin-top-15">
                                    <label for="price">Price</label>
                                    <input type="number" name="Price" class="form-control" id="price" placeholder="Price *" />
                                    <input type="checkbox" name="Negotiable" id="negotiable"/><label for="negotiable">&nbsp;Negotiable</label> 
                                </div>
                                <div class="form-group margin-top-15">
                                    <input type="checkbox" name="Bid" id="bid"/><label for="bid">Allow Bids</label>
                                </div>
                                <div class="form-group margin-top-30">
                                    <input type="file" name="Images[]" id="file-7" class="inputfile inputfile-6" multiple data-multiple-caption="{count} files selected" />
                                    <label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Select files&nbsp;&hellip;</strong></label>
                                    <br/>
                                    <span style="color: #5c5c5c; font-size: 12px;">Add upto 5 images.  Use a real image of your product, not catalogs.</span>
                                </div>
                                <div class="form-group margin-top-15 margin-bottom-15">&nbsp;</div>
                                <fieldset>
                                    <legend style="font-size: 17px"><span class="fa fa-user"></span>&nbsp; Seller Information</legend>
                                    
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <textarea class="form-control" id="address" name="Address" required placeholder="Address *"></textarea>
                                    </div>
                                    <div class="form-group margin-top-15">
                                        <label class="contact_no">Contact No:</label>
                                        <input type="text" name="ContactNo" class="form-control" id="contact_no" placeholder="contact No"/>
                                    </div>
                                </fieldset>
                                <div class="form-group margin-top-15">
                                    <button type="submit" class="btn btn-default pull-right"><span class="fa fa-send"></span>&nbsp;Publish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 inner-box margin-left-30 ads-container padding-left-15 padding-right-15 padding-bottom-15">
                        <h3 class="box-title">How to Sell Fast?</h3>
                        <ul class="safety-ul">
                            <li><span class="fa fa-check"></span>&nbsp;Add real and nice images</li> 
                            <li><span class="fa fa-check"></span>&nbsp;Use negotiable price</li>
                            <li><span class="fa fa-check"></span>&nbsp;Check that Ad is in correct category</li>
                            <li><span class="fa fa-check"></span>&nbsp;Add clear description to your ad</li>
                            <li><span class="fa fa-check"></span>&nbsp;Add real details</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include './views/footer.php'; ?>
            </div>
        </div>
        <script>
            var inputs = document.querySelectorAll( '.inputfile' );
           
Array.prototype.forEach.call( inputs, function( input )
{ 
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
});

        </script>
        <?php include './assests/script_refs.php'; ?>
    </body>
</html>
