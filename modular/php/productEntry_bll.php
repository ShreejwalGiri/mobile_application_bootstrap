<?php 

	include ("../db_connection/db_connection.php") ; 
	include ("../crud_all.php") ; 

	$database = new db_connection() ; 

	$product_name = $_POST['product_name_txt'] ; 
	$product_price = $_POST['product_price_txt'] ; 
	$product_brand = $_POST['product_brand_txt'] ; 
	$product_detail = $_POST['product_detail_txt'] ;
	$image = "Emty field" ; 

	// TO upload the image into the products dBMS 
	if (isset($_FILES['product_image']))
	{
		$file = $_FILES['product_image'];

		// file properties 

		$file_name = $file['name'];
		$temp_name = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'] ;  

		// file extention 

		$file_extention = explode(".", $file_name) ; 
		$last = strtolower(end($file_extention)); 
		$allowed_extentions = array('png','jpeg','jpg');


		if (in_array($last,$allowed_extentions))
		{
			if($file_error === 0)
			{
				$unique_file = uniqid('',true).".".$last ; 
				$file_destination = "../../viewer/bootstrap_style/images/uploaded_files/".$unique_file ; 
				$image = $unique_file ; 
				move_uploaded_file($temp_name, $file_destination) ;
			}
		}
	} 

	
	

	$data = new crud_all() ; 
	$data -> product_entry ($product_name,$product_price,$product_brand,$product_detail,$image) ;

	header("Location:../../productEntry") ; 




?>