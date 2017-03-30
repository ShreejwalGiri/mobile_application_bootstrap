<div class=row>
	<div class="col-md-2">&nbsp;</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body" >
				<label class=" heading-label"  >Product Image</label>
				<?php 

						if (!isset($_SESSION['login_id']))
						{	
							include ("modular/db_connection/db_connection.php") ;
				   		    include ("modular/crud_all.php") ;
							$db_connection = new db_connection() ; 
						}
				
					$p_id = $_GET['p-id'];

					$data = new crud_all(); 
					$data = $data -> product_detail_id($p_id);

					while ($row = mysql_fetch_array($data))
					{
				?>
				<div class="container-fluid">
					<div class="col-md-6">
						<div>
							<image style="width:70%;" src="viewer/bootstrap_style/images/uploaded_files/<?php echo $row['image']?>" />	
						</div>
						<div class="vertical-space-short"  style="align-items: center;">
							<a  href="~/mobile_application_bootstrap/../../modular/php/cart_bll.php?u-id=<?php echo $_SESSION['login_id']  ?> && p-id=<?php echo $p_id ;  ?>" class="btn btn-default add-to-cart "><i class="fa fa-shopping-cart "></i>Add to cart</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body" >
								<label class="heading-label"  >Product Details : </label>
								<div class="vertical-space-short">
									<!-- <label class="label label-primary label-size"  >Product Name : </label> -->
									<label class="label label-warning label-size horizontal-space"  >Product Name : <?php echo $row['product_name'] ?></label>
								</div>
								<div class="vertical-space-short">
									<!-- <label class="label label-primary label-size"  >Product Price : </label> -->
									<label class="label label-warning label-size horizontal-space"  >Product Price : <?php echo $row['product_price'] ?> RS</label>
								</div>
								<div class="vertical-space-short">
									<!-- <label class="label label-primary label-size"  >Product Brand : </label> -->
									<label class="label label-warning label-size horizontal-space"  > Product Brand : <?php echo $row['product_brand'] ?></label>
								</div>
								<div class="vertical-space-short">
									<!-- <label class="label label-primary label-size"  >Product Details : </label> -->
									<label class="label label-warning label-size horizontal-space"  >Product Details : <?php echo $row['product_detail'] ?></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<?php

					// closing of the while loop  
					}
				?>
				
			</div>
		</div>
	</div>
	<div class="col-md-2">&nbsp;</div>
</div>