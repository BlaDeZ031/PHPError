<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<?php include('includefiles/top.php'); ?>

	
    <title>Bego </title>

</head>

<body>
	<?php include('includefiles/header.php'); ?>




    <main>
        <!-- hero slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item bg-img" data-bg="<?php echo base_url();?>assets/img/slider/home1-slide1.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-1">
                                        <h2 class="slide-title">Leather ladies bag<span>collection 2019.</span></h2>
                                        <h6 class="slide-desc">Designer Jewellery Necklaces-Bracelets-Earings</h6>
                                        <a href="<?php echo base_url('products'); ?>" class="btn btn-hero">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->

                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item bg-img" data-bg="<?php echo base_url();?>assets/img/slider/home1-slide2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-2">
                                        <h2 class="slide-title">Leather ladies bag<span>collection 2019.</span></h2>
                                        <h6 class="slide-desc">Designer Jewellery Necklaces-Bracelets-Earings</h6>
                                        <a href="#" class="btn btn-hero">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
            </div>
        </section>
        <!-- hero slider area end -->


        <!-- product area start -->
        <section class="featured-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header">
                            <!-- section title start -->
                            <div class="section-title">
                                <h3 class="title">Latest Products</h3>
                            </div>
                            <!-- section title start -->
                            <!-- product tab menu start -->
                            <div class="product-tab-menu">
                                <ul class="nav justify-content-center">
										<?php
											$no = 1;
											foreach($latestproductsdata['navs'] as $category){
												
										?>
										<li><a <?php if($no==1){ echo 'class="active"';} ?>  href="#tab<?php echo $category['id'];?>" data-toggle="tab"><?php echo $category['name']; ?></a></li>
										<?
											$no++;
											}
										?>
									
                                </ul>
                            </div>
                            <!-- product tab menu end -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-container">
                            <!-- product tab content start -->
                            <div class="tab-content">
										<?php
											$no = 1;
											foreach($latestproductsdata['navs'] as $category){
												
										?>
							   <div class="tab-pane fade <?php if($no==1){ echo 'show active';} ?>" id="tab<?php echo $category['id'];?>">
                                    <div class="product-carousel-4 slick-row-10 slick-arrow-style slick-arrow-style__append">
										
										<?php
											
											foreach($latestproductsdata['products']['c'.$category['id']] as $product){
												if($product['categoryid']==$category['id']){
										?>
                                        <!-- product item start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?php echo base_url();?>products/detail?id=<?php echo $product['product_code'];?>">
													<?php 
													$ino=1;
														foreach($product['images'] as $image){
															if($ino == 1){
																$ino++;
													?>
                                                    <img class="pri-img" src="<?php echo base_url($image['url']);?>" alt="<?php echo $image['name']; ?>" style="width:263px;height:292px;">
													<?php
															}
															else{
													?>
                                                    <img class="sec-img" src="<?php echo base_url($image['url']);?>" alt="<?php echo $image['name']; ?>" style="width:263px;height:292px;">
													<?php
													break;
															}
													?>
													
													<?php } ?>
                                                </a>
                                                <div class="product-badge">
                                                    <div class="product-label new">
                                                        <span>-<?php echo $product['discount_percentage']; ?>%</span>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <a href="#" data-productcode="<?php echo $product['product_code'] ?>" <?php if($product['wishstatus'] == "yes"){ echo 'style="color: #fff;background-color: #dce0df;"'; } ?>  class="wishbtn" data-toggle="tooltip" id="wish" title="<?php if($product['wishstatus'] == "yes"){ echo 'Remove'; } else { echo 'Add';} ?> to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a  data-productcode="<?php echo $product['product_code'] ?>"  class="cartbtn" data-toggle="tooltip" id="cartshop"  data-toggle="tooltip" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick_view1<?php echo $product['id'] ?>"><span data-toggle="tooltip" title="Quick View"><i class="pe-7s-look"></i></span></a>
                                                </div>
                                            </figure>
                                            <div class="product-caption text-center">
                                                <h6 class="product-name">
                                                    <a href="<?php echo base_url();?>products/detail?id=<?php echo $product['product_code'];?>"><?php echo $product['name']; ?></a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-regular">&euro; <?php echo $product['discount_price']; ?></span>
                                                    <span class="price-old"><del>&euro; <?php echo $product['price']; ?></del></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product item end -->
										<?
												}
											}
										?>
									

                                    </div>
                                </div>
										<?
										$no++;
											}
										?>
                               

                            </div>
                            <!-- product tab content end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->

        <!-- banner statistics area start -->
       
        <!-- banner statistics area end -->

        <!-- featured product area start -->
        <section class="our-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">Our products</h2>
                            <p class="sub-title">Add featured products to weekly lineup</p>
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">

										<?php
											$no = 1;
											foreach($latestproductsdata['products']['all'] as $product){
										?>
                                        <!-- product item start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?php echo base_url();?>products/detail?id=<?php echo $product['product_code'];?>">
													<?php 
													$ino=1;
														foreach($product['images'] as $image){
															if($ino == 1){
																$ino++;
													?>
                                                    <img class="pri-img" src="<?php echo base_url($image['url']);?>" alt="<?php echo $image['name']; ?>" style="width:263px;height:292px;">
													<?php
															}
															else{
													?>
                                                    <img class="sec-img" src="<?php echo base_url($image['url']);?>" alt="<?php echo $image['name']; ?>" style="width:263px;height:292px;">
													<?php
															}
													?>
													
													<?php } ?>
                                                </a>
                                                <div class="product-badge">
                                                    <div class="product-label new">
                                                        <span>-<?php echo $product['discount_percentage']; ?>%</span>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <a href="#" data-productcode="<?php echo $product['product_code'] ?>" <?php if($product['wishstatus'] == "yes"){ echo 'style="color: #fff;background-color: #dce0df;"'; } ?>  class="wishbtn" data-toggle="tooltip" id="wish" title="<?php if($product['wishstatus'] == "yes"){ echo 'Remove'; } else { echo 'Add';} ?> to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a  data-productcode="<?php echo $product['product_code'] ?>"  class="cartbtn" data-toggle="tooltip" id="cartshop"  data-toggle="tooltip" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick_view2<?php echo $product['id'] ?>"><span data-toggle="tooltip" title="Quick View"><i class="pe-7s-look"></i></span></a>
                                                </div>
                                            </figure>
                                            <div class="product-caption text-center">
                                                <h6 class="product-name">
                                                    <a href="<?php echo base_url();?>products/detail?id=<?php echo $product['product_code'];?>"><?php echo $product['name']; ?></a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-regular">&euro; <?php echo $product['discount_price']; ?></span>
                                                    <span class="price-old"><del>&euro; <?php echo $product['price']; ?></del></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product item end -->
										<?
											}
										?>
									
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured product area end -->

    </main>


	<?php
		$no = 1;
		foreach($latestproductsdata['navs'] as $category){
			
			foreach($latestproductsdata['products']['c'.$category['id']] as $product){
				if($product['categoryid']==$category['id']){
	?>
    <!-- Quick view modal start -->
    <div class="modal" id="quick_view1<?php echo $product['id']; ?>">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
									<?php 
										foreach($product['images'] as $image){
											
										?>
										<div class="pro-large-img img-zoom">
											<img src="<?php echo base_url($image['url']);?>" alt="<?php echo base_url($image['name']);?>" />
										</div>
									
									<?php } ?>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
									<?php 
										foreach($product['images'] as $image){
											
										?>
                                    <div class="pro-nav-thumb">
                                        <img src="<?php echo base_url($image['url']);?>" alt="<?php echo base_url($image['name']);?>" />
                                    </div>
									
									<?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="product-name"><?php echo $product['name']; ?></h3>
                                    <div class="price-box">
                                        <span class="price-regular"><?php echo $product['discount_price']; ?></span>
                                        <span class="price-old"><del><?php echo $product['price']; ?></del></span>
                                    </div>
                                    <div class="availability">
                                        <i class="fa fa-check-circle"></i>
                                        <span><?php echo $product['stock']; echo " ".$product['stock_status']; ?></span>
                                    </div>
                                    <p class="pro-desc"><?php echo $product['detail']; ?></p>
                                    <div class="quantity-cart-box d-flex align-items-center">

                                        <div class="action_link">
                                           
											<a  data-productcode="<?php echo $product['product_code'] ?>"  class="cartbtn btn btn-cart2" data-toggle="tooltip" id="cartshop"  data-toggle="tooltip" title="Add to Cart"><i class="pe-7s-cart"></i>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="useful-links">
										<a href="#" data-productcode="<?php echo $product['product_code'] ?>" <?php if($product['wishstatus'] == "yes"){ echo 'style="color: #fff;background-color: #dce0df;"'; } ?>  class="wishbtn" data-toggle="tooltip" id="wish" title="<?php if($product['wishstatus'] == "yes"){ echo 'Remove'; } else { echo 'Add';} ?> to Wishlist"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->
	<? 
				}
			}
		}		
	?>
	<?php
		$no = 1;
		foreach($latestproductsdata['products']['all'] as $product){
	?>
    <!-- Quick view modal start -->
    <div class="modal" id="quick_view2<?php echo $product['id']; ?>">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
									<?php 
										foreach($product['images'] as $image){
											
										?>
										<div class="pro-large-img img-zoom">
											<img src="<?php echo base_url($image['url']);?>" alt="<?php echo base_url($image['name']);?>" />
										</div>
									
									<?php } ?>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
									<?php 
										foreach($product['images'] as $image){
											
										?>
										<div class="pro-large-img img-zoom">
											<img src="<?php echo base_url($image['url']);?>" alt="<?php echo base_url($image['name']);?>" />
										</div>
                                    <div class="pro-nav-thumb">
                                        <img src="<?php echo base_url($image['url']);?>" alt="<?php echo base_url($image['name']);?>" />
                                    </div>
									
									<?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="product-name"><?php echo $product['name']; ?></h3>
                                    <div class="price-box">
                                        <span class="price-regular"><?php echo $product['discount_price']; ?></span>
                                        <span class="price-old"><del><?php echo $product['price']; ?></del></span>
                                    </div>
                                    <div class="availability">
                                        <i class="fa fa-check-circle"></i>
                                        <span><?php echo $product['stock']; echo " ".$product['stock_status']; ?></span>
                                    </div>
                                    <p class="pro-desc"><?php echo $product['detail']; ?></p>
                                    <div class="quantity-cart-box d-flex align-items-center">
                                        
                                        <div class="action_link">
                                          
											<a href="#" data-productcode="<?php echo $product['product_code'] ?>"  class="cartbtn btn btn-cart2" data-toggle="tooltip" id="cartshop"  data-toggle="tooltip" title="Add to Cart"><i class="pe-7s-cart"></i>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="useful-links">
										<a href="#" data-productcode="<?php echo $product['product_code'] ?>" <?php if($product['wishstatus'] == "yes"){ echo 'style="color: #fff;background-color: #dce0df;"'; } ?>  class="wishbtn" data-toggle="tooltip" id="wish" title="<?php if($product['wishstatus'] == "yes"){ echo 'Remove'; } else { echo 'Add';} ?> to Wishlist"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->
	<? 
		
		} 
	?>

	<?php include('includefiles/bottom.php'); ?>
	<?php include('includefiles/footer.php'); ?>



</body>


</html>

