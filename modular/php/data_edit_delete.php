<?php 

	include ("../db_connection/db_connection.php") ; 
	include ("../crud_all.php") ;

	$database = new db_connection(); 


	// to delete the admin value 

	if (isset($_GET['d_id_a']))
	{
		$d_id = $_GET['d_id_a'];
		$data = new crud_all() ; 
		$data -> admin_delete($d_id);
		header("Location:../../product_view?d_id_a=$d_id");
	} 

	// to edit the admin value 

	if (isset($_GET['e_id_a']))
	{
		$full_name = $_POST['full_name_txt'];
		$address = $_POST['address_txt'];
		$mobile_no = $_POST['mobile_no_txt'];
		$email_id = $_POST['email_id_txt'];
		$username = $_POST['username_txt'];
		$password = $_POST['password_txt'];
		$e_id = $_GET['e_id_a'];
		$data = new crud_all() ; 
		$data -> admin_edit($e_id,$full_name,$address,$mobile_no,$email_id,$username,$password);
		header("Location:../../product_view?e_id_a=$e_id");
	} 

	// to delete the user value 


	if (isset($_GET['d_id_u']))
	{
		$d_id = $_GET['d_id_u'];
		$data = new crud_all() ; 
		$data -> user_delete($d_id);
		header("Location:../../product_view?d_id_u=$d_id");
	} 

	// to edit the user value 

	if (isset($_GET['e_id_u']))
	{
		$full_name = $_POST['full_name_txt'];
		$email_id = $_POST['email_id_txt']; 
		$password = $_POST['password_txt'];
		$e_id = $_GET['e_id_u'];
		$data = new crud_all() ; 
		$data -> user_edit($e_id,$full_name,$email_id,$password);
		header("Location:../../product_view?e_id_u=$e_id");
	}

	// to delete the product values 

	if (isset($_GET['d_id_p']))
	{
		$d_id = $_GET['d_id_p'];
		$data = new crud_all() ; 
		$data -> product_delete($d_id);
		header("Location:../../product_view?d_id_p=$d_id");
	} 

	// to edit the product values 

	if (isset($_GET['e_id_p']))
	{
		$e_id  = $_GET['e_id_p'];
		$product_name = $_POST['product_name_txt'] ; 
		$product_price = $_POST['product_price_txt'] ; 
		$product_brand = $_POST['product_brand_txt'] ; 
		$product_detail = $_POST['product_detail_txt'] ;
		$image = "" ; 

		if (isset($_FILES['product_image']))
		{
			$file = $_FILES['product_image'];
			$file_name = $file['name'];
			$image = $file_name ; 
		}

		$data = new crud_all() ; 
		$data -> product_edit($e_id,$product_name,$product_price,$product_brand,$product_detail,$image) ; 
		header("Location:../../product_view?e_id_p=$e_id");

	}

	// to delete the cart 

	if (isset($_GET['d_id_c']))
	{
		$d_id = $_GET['d_id_c'];
		$data = new crud_all() ; 
		$data -> cart_delete($d_id);
		header("Location:../../cart?d_id_c=$d_id");
	}
?>