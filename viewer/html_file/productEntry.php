<?php 
	if (isset($_GET['e_id_p']))
	{
		if (!isset($_SESSION['login_id']))
		{
			include ("modular/db_connection/db_connection.php") ;
			include ("modular/crud_all.php") ;
			$database = new db_connection() ;
		}
		  
		 $id = $_GET['e_id_p'] ;
		 $data = new crud_all() ;
		   
		 $data = $data -> product_detail_id($id) ; 

			while ($row = mysql_fetch_array($data))
			{ 
	?>
<form method="post" action="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php?e_id_p=<?php echo $id ?>" enctype="multipart/form-data" >
	<div class="row">
		<div class="col-md-2">
		&nbsp; 
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<input class="form-control vertical-space " value="<?php echo $row['product_name'] ?>" type="text" placeholder="Product Name" name="product_name_txt" />
					<input class="form-control vertical-space" value="<?php echo $row['product_price'] ?>" type="text" placeholder="Product Price" name="product_price_txt" />
					<input class="form-control vertical-space" value="<?php echo $row['product_brand'] ?>" type="text" placeholder="Product Brand" name="product_brand_txt" />
					<input class="form-control vertical-space" value="<?php echo $row['product_detail'] ?>" type="text" placeholder="Product Detail" name="product_detail_txt" />
					<input class = "vertical-space" value="<?php echo $row['image'] ?>" type="file" placeholder="Product Detail" name="product_image" />
					<button class="btn btn-default vertical-space" name="btn_submit">Submit</button>	
				</div>
			</div>
		</div>
		<div class="col-md-2">
		&nbsp; 
		</div>
	</div>
</form>
<?php
	// closing of the while  loop 
		}
	// cloding of the if statement  
	}

	else 
	{
?>
<form method="post" action="~/mobile_application_bootstrap/../../modular/php/productEntry_bll.php" enctype="multipart/form-data" >
	<div class="row">
		<div class="col-md-2">
		&nbsp; 
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<input class="form-control vertical-space " type="text" placeholder="Product Name" name="product_name_txt" />
					<input class="form-control vertical-space" type="text" placeholder="Product Price" name="product_price_txt" />
					<input class="form-control vertical-space" type="text" placeholder="Product Brand" name="product_brand_txt" />
					<input class="form-control vertical-space" type="text" placeholder="Product Detail" name="product_detail_txt" />
					<input class = "vertical-space" type="file" placeholder="Product Detail" name="product_image" />
					<button class="btn btn-default vertical-space" name="btn_submit">Submit</button>	
				</div>
			</div>
		</div>
		<div class="col-md-2">
		&nbsp; 
		</div>
	</div>
</form>

<?php
	// closing of the else statement  
	}
?>
