
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>MOBILE</span>-SHOP</h1>
									<h2>Online Mobile Shopping Site</h2>
									<p>Place your order and enjoy shopping online</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="viewer/image/imgone.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="viewer/image/global-mobile-phone-sale"  class="pricing" alt="" /> -->
								</div>
							</div>
							<!-- <div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="viewer/bootstrap_style/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="viewer/bootstrap_style/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div> -->

							<!-- <div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="viewer/bootstrap_style/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="viewer/bootstrap_style/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div> -->

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

<section>
		<div class="container">
			<div class="row">
				<!-- <div class="col-sm-3">
					&nbsp;
					<div class="left-sidebar">

					</div>
				</div> -->
				<div class="col-sm-12 padding-right">
					<?php
						// session_start() ;
						if (isset($_SESSION['login_id']))
						{
							$one = $_SESSION['login_id'];
						}
						else
						{
							$one = "empty" ;
						}



					?>
					<!-- <form method="post" action="~/mobile_application_bootstrap/../../modular/php/cart_bll.php?u-id=<?php echo $one  ?> && p-id=<?php echo $p_id ;  ?> " > -->
						<div class="features_items"><!--features_items-->
							<h2 class="title text-center">Features Items</h2>

										<?php

											if (!isset($_SESSION['login_id']))
											{
												include ('modular/db_connection/db_connection.php') ;
												include ('modular/crud_all.php');
												$database = new db_connection() ;
											}

											$class = new crud_all() ;
											$class = $class -> product_details() ;

											while ($row = mysql_fetch_array($class))
											{

												$p_id = $row['id'];

										?>

							<div class="col-sm-4">
								<div class="product-image-wrapper" style="width:50%;">
									<div class="single-products">
											<div class="productinfo text-center">
												<!-- <input type="hidden" name="p_id" value="<?php echo $row['id']; ?>" /> -->
												<image style="width:90%;" src="viewer/bootstrap_style/images/uploaded_files/<?php echo $row['image']?>" />

												<h2 name ><?php echo $row['product_price']." "."Rs"?></h2>
												<p><?php echo $row['product_name']?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>


											<div class="product-overlay">
												<div class="overlay-content">
													<h2><?php echo $row['product_price']." "."$"?></h2>
													<p><?php echo $row['product_name']?></p>
													<a href="~/mobile_application_bootstrap/../../modular/php/cart_bll.php?u-id=<?php echo $one  ?> && p-id=<?php echo $p_id ;  ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<!-- <button class="btn btn-default add-to-cart" name="btn_add_p" ><i class="fa fa-shopping-cart"></i>Add to cart</button> -->
												</div>
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="productDetails? p-id=<?php echo $p_id ;  ?>"><i class="fa fa-plus-square"></i>Product Details</a></li>
											<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
										</ul>
									</div>

								</div>
							</div>

							<?php

								// end of the while loop
								}
							?>
						</div>
				<!-- 	</form> -->

				</div><!--features_items-->


				</div>
			</div>
		</div>
	</section>
