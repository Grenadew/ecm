<?php 
	$span = 12/$cols; 
	$active = 'latest';
	$id = rand(1,9);	
	$themeConfig = $this->config->get('themecontrol');
	$this->language->load('module/themecontrol');
	$categoryConfig = array( 
		'show_swap_image'	 => 0,
		'quickview' 		 => 0
	); 

	$categoryConfig  = array_merge($categoryConfig, $themeConfig );
	$quickview=$themeConfig['quickview'];
?>
<div class="<?php echo $prefix;?> box productcarousel">
	<div class="box-heading"><h4><span><?php echo $heading_title; ?></span></h4></div>
	<div class="box-content" >
 		<div class="box-products slide" id="productcarousel<?php echo $id;?>">
			<?php if( trim($message) ) { ?>
			<div class="box-description"><?php echo $message;?></div>
			<?php } ?>
			<?php if( count($products) > $itemsperpage ) { ?>
			<div class="carousel-controls">
			<a class="carousel-control left icon-angle-left" href="#productcarousel<?php echo $id;?>"   data-slide="prev"></a>
			<a class="carousel-control right icon-angle-right" href="#productcarousel<?php echo $id;?>"  data-slide="next"></a>
			</div>
			<?php } ?>
			<div class="carousel-inner ">		
			 <?php 
				$pages = array_chunk( $products, $itemsperpage);
			//	echo '<pre>'.print_r( $pages, 1 ); die;
			 ?>	
			  <?php foreach ($pages as  $k => $tproducts ) {   ?>
					<div class="item <?php if($k==0) {?>active<?php } ?>">
						<?php foreach( $tproducts as $i => $product ) {  $i=$i+1;?>
							<?php if( $i%$cols == 1 || $cols == 1) { ?>
							  <div class="row box-product">
							<?php } ?>
								<div class="col-lg-<?php echo $span;?> col-md-<?php echo $span;?> col-sm-6 col-xs-12">
								<div class="product-block">
								  	
									<?php if ($product['thumb']) { ?>
									
									 <div class="image">
								        <?php if( $product['special'] ) {   ?>
								        <span class="product-label-special label"><?php echo $this->language->get( 'text_sale' ); ?></span>
								        <?php } ?>
								        <a class="img" href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" /></a>
								        <?php //#2 End fix quickview in fw?>
							      	    <?php 
						      			if( $categoryConfig['show_swap_image'] ){
											$product_images = $this->model_catalog_product->getProductImages( $product['product_id'] );
											if(isset($product_images) && !empty($product_images)) {
												$thumb2 = $this->model_tool_image->resize($product_images[0]['image'],  $this->config->get('config_image_product_width'),  $this->config->get('config_image_product_height') );
											?>	
											<div class="faceback hidden-xs hidden-sm">
												<a class="img back" href="<?php echo $product['href']; ?>">
													<img src="<?php echo $thumb2; ?>">
												</a>
											</div>	
										<?php } } ?>

										<?php if ($quickview) { ?>
											<a class="pav-colorbox cboxElement hidden-xs" href="index.php?route=themecontrol/product&product_id=<?php echo $product['product_id']; ?>">
												<?php echo $this->language->get('quick_view'); ?></a>
										<?php } ?>

								    </div>
									<?php } ?>
									<div class="product-meta">
								        <h3 class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
								        <div class="description">
											<?php echo utf8_substr( strip_tags($product['description']),0,100);?>...
										</div>
								       
										 <?php if ($product['rating']) { ?>
											<div class="rating"><img src="catalog/view/theme/<?php echo $this->config->get('config_template');?>/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
										<?php } ?> 

								         <?php if ($product['price']) { ?>
										 <div class="price">
											  <?php if (!$product['special']) { ?>
											  <?php echo $product['price']; ?>
											  <?php } else { ?>
											  <span class="price-new"><?php echo $product['special']; ?></span>
											  <span class="price-old"><?php echo $product['price']; ?></span>
											  <?php } ?>
											  <span class="cart"> <input type="button"  value="" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="button" /></span>

										</div>
										  <?php } ?>

										<div class="product-hover">
									        <div class="wishlist pull-right"><a  onclick="addToWishList('<?php echo $product['product_id']; ?>');"><?php echo $this->language->get("button_wishlist"); ?></a></div>
									        <div class="compare pull-right"><a class="pavicon-compare" onclick="addToCompare('<?php echo $product['product_id']; ?>');"><?php echo $this->language->get("button_compare"); ?></a></div>
							    		</div>   
							    	</div>
								
								  
								 </div>
								</div>
						  
						  <?php if( $i%$cols == 0 || $i==count($tproducts) ) { ?>
							 </div>
							<?php } ?>
						<?php } //endforeach; ?>
					</div>
			  <?php } ?>
			</div>  
		</div>
 </div> </div>

<script type="text/javascript">
$('#productcarousel<?php echo $id;?>').carousel({interval:<?php echo ( $auto_play_mode?$interval:'false') ;?>,auto:<?php echo $auto_play;?>,pause:'hover'});
</script>
